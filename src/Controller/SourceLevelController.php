<?php

namespace App\Controller;

use App\Entity\SourceLevel;
use App\Form\SourceLevelType;
use App\Repository\SourceLevelRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/source/level')]
final class SourceLevelController extends AbstractController{
    #[Route(name: 'app_source_level_index', methods: ['GET'])]
    public function index(SourceLevelRepository $sourceLevelRepository): Response
    {
        return $this->render('source_level/index.html.twig', [
            'source_levels' => $sourceLevelRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_source_level_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $sourceLevel = new SourceLevel();
        $form = $this->createForm(SourceLevelType::class, $sourceLevel);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($sourceLevel);
            $entityManager->flush();

            return $this->redirectToRoute('app_source_level_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('source_level/new.html.twig', [
            'source_level' => $sourceLevel,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_source_level_show', methods: ['GET'])]
    public function show(SourceLevel $sourceLevel): Response
    {
        return $this->render('source_level/show.html.twig', [
            'source_level' => $sourceLevel,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_source_level_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, SourceLevel $sourceLevel, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(SourceLevelType::class, $sourceLevel);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_source_level_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('source_level/edit.html.twig', [
            'source_level' => $sourceLevel,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_source_level_delete', methods: ['POST'])]
    public function delete(Request $request, SourceLevel $sourceLevel, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$sourceLevel->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($sourceLevel);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_source_level_index', [], Response::HTTP_SEE_OTHER);
    }
}
