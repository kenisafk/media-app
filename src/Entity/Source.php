<?php

namespace App\Entity;

use App\Repository\SourceRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SourceRepository::class)]
class Source
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    // ManyToOne relationship with SourceLevel
    #[ORM\ManyToOne(targetEntity: SourceLevel::class)]
    #[ORM\JoinColumn(nullable: false)]
    private ?SourceLevel $level = null;

    #[ORM\Column(length: 1000)]
    private ?string $mainUrl = null;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getLevel(): ?int
    {
        return $this->level;
    }

    public function setLevel(int $level): static
    {
        $this->level = $level;

        return $this;
    }

    public function getMainUrl(): ?string
    {
        return $this->mainUrl;
    }

    public function setMainUrl(string $mainUrl): static
    {
        $this->mainUrl = $mainUrl;

        return $this;
    }
}
