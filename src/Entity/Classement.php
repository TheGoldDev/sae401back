<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\ClassementRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;


#[ORM\Entity(repositoryClass: ClassementRepository::class)]
#[ORM\Table(name: "classement")]
#[ApiResource(normalizationContext: ['groups' => ['read:classement']],)]

class Classement
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: "integer")]
    #[Groups('read:classement')]
    private ?int $id;

    #[ORM\Column(type: "string", length: 5)]
    #[Groups('read:classement')]
    private ?string $time;

    #[ORM\Column(type: "string", length: 10)]
    #[Groups('read:classement')]
    private ?string $difficulty;

    #[ORM\Column(type: "string", length: 100)]
    #[Groups('read:classement')]
    private ?string $pseudo;

    #[ORM\ManyToOne(inversedBy: 'classements')]
    #[Groups('read:classement')]

    public function getPseudo(): ?string
    {
        return $this->pseudo;
    }

    public function setPseudo(string $pseudo): self
    {
        $this->pseudo =$pseudo;

        return $this;
    }
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTime(): ?string
    {
        return $this->time;
    }

    public function setTime(string $time): self
    {
        $this->time = $time;

        return $this;
    }

    public function getDifficulty(): ?string
    {
        return $this->difficulty;
    }

    public function setDifficulty(string $difficulty): self
    {
        $this->difficulty = $difficulty;

        return $this;
    }
}
