<?php

namespace App\Entity;

use App\Repository\ActivityTypeRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ActivityTypeRepository::class)]
class ActivityType
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column]
    private ?float $pointsMultiplier = null;

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

    public function getPointsMultiplier(): ?float
    {
        return $this->pointsMultiplier;
    }

    public function setPointsMultiplier(float $pointsMultiplier): static
    {
        $this->pointsMultiplier = $pointsMultiplier;

        return $this;
    }
}
