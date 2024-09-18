<?php

namespace App\Service;

use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Encoder\JsonEncoder;

class RssSerializerService
{
    private SerializerInterface $serializer;

    public function __construct()
    {
        $normalizers = [new ObjectNormalizer()];
        $encoders = [new JsonEncoder()];
        $this->serializer = new \Symfony\Component\Serializer\Serializer($normalizers, $encoders);
    }

    public function serialize(array $data): string
    {
        return $this->serializer->serialize($data, 'json');
    }

    public function normalize(array $data): array
    {
        return $this->serializer->normalize($data);
    }
}
