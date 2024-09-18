<?php

namespace App\Service;

use App\Repository\SourceRepository;

class SourceService {
    public function __construct(
        private SourceRepository $repository
    ){}

    public function getAll(): array {
        return $this->repository->findAll();
    }

    public function get($s) {
        return $this->repository->findBy(['name' => $s]);
    }
}