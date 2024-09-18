<?php

namespace App\Controller;

use App\Entity\Document;
use App\Form\DocumentType;
use App\Repository\DocumentRepository;
use App\Service\SourceService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Serializer\SerializerInterface;

#[Route('/document')]
final class DocumentController extends AbstractController{
    #[Route(name: 'app_document_index', methods: ['GET'])]
    public function index(DocumentRepository $documentRepository, SourceService $sourceService, Request $request): Response
    {
        $limit = $request->query->get('limit', 10); // default limit is 10
        $source = $request->query->get('source', null); // default is no sorting
        $category = $request->query->get('category', null);
        $documentCount = $documentRepository->count([]);

        $criteria = [];
        if ($category) {
            $criteria['category'] = $category;
        }
        if ($source) {
            $criteria['source'] = $source;
        }

        // Fetch documents based on query parameters
        $documents = $documentRepository->findBy($criteria, ['publishedAt' => 'DESC'], $limit);
        $sources = $sourceService->getAll();
        
        return $this->render('document/index.html.twig', [
            'documents' => $documents,
            'documentCount' => $documentCount,
            'sources' => $sources
        ]);
    }

    #[Route('/json', name: 'app_document_index_json', methods: ['GET'])]
    public function index_json(SerializerInterface $serializer, DocumentRepository $documentRepository, Request $request): JsonResponse
    {
        $limit = $request->query->get('limit', 10); // default limit is 10
        $source = $request->query->get('source', null); // default is no sorting
        $category = $request->query->get('category', null);
        
        $criteria = [];
        if ($category) {
            $criteria['category'] = $category;
        }
        if ($source) {
            $criteria['source'] = $source;
        }

        // Fetch documents based on query parameters
        $documents = $documentRepository->findBy($criteria, ['publishedAt' => 'DESC'], $limit);
        $jsonContent = $serializer->serialize($documents, 'json');
        return new JsonResponse($jsonContent, 200, [], true);
    }

    /* #[Route('/new', name: 'app_document_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $document = new Document();
        $form = $this->createForm(DocumentType::class, $document);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($document);
            $entityManager->flush();

            return $this->redirectToRoute('app_document_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('document/new.html.twig', [
            'document' => $document,
            'form' => $form,
        ]);
    } 
    */

    #[Route('/{id}', name: 'app_document_show', methods: ['GET'])]
    public function show(Document $document): Response
    {
        return $this->render('document/show.html.twig', [
            'document' => $document,
        ]);
    }
/* 
    #[Route('/{id}/edit', name: 'app_document_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Document $document, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(DocumentType::class, $document);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_document_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('document/edit.html.twig', [
            'document' => $document,
            'form' => $form,
        ]);
    } */

   /*  #[Route('/{id}', name: 'app_document_delete', methods: ['POST'])]
    public function delete(Request $request, Document $document, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$document->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($document);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_document_index', [], Response::HTTP_SEE_OTHER);
    } */
}
