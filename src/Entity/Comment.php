<?php

namespace App\Entity;

use App\Repository\CommentRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CommentRepository::class)]
class Comment
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $contet = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getContet(): ?string
    {
        return $this->contet;
    }

    public function setContet(string $contet): self
    {
        $this->contet = $contet;

        return $this;
    }
}
