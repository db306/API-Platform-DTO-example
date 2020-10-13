<?php

declare(strict_types=1);


namespace App\DataTransformer;

use ApiPlatform\Core\DataTransformer\DataTransformerInterface;
use App\DTO\UserDTO;
use App\Entity\User;

class UserDataTransformer implements DataTransformerInterface
{
    public function transform($object, string $to, array $context = [])
    {
        return new UserDTO($object->getId(), $object->getUsername(), $object->getEmail());
    }

    public function supportsTransformation($data, string $to, array $context = []): bool
    {
        return UserDTO::class === $to && $data instanceof User;
    }
}