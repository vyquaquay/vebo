<?php

namespace App\Entity;

use App\Repository\GameRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: GameRepository::class)]
class Game
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $Match_ID = null;

    #[ORM\Column]
    private ?int $Club_1 = null;

    #[ORM\Column]
    private ?int $Club1_score = null;

    #[ORM\Column]
    private ?int $Club2_score = null;

    #[ORM\Column]
    private ?int $Club_2 = null;

    #[ORM\Column(length: 255)]
    private ?string $Stadium = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMatchID(): ?int
    {
        return $this->Match_ID;
    }

    public function setMatchID(int $Match_ID): self
    {
        $this->Match_ID = $Match_ID;

        return $this;
    }

    public function getClub1(): ?int
    {
        return $this->Club_1;
    }

    public function setClub1(int $Club_1): self
    {
        $this->Club_1 = $Club_1;

        return $this;
    }

    public function getClub1Score(): ?int
    {
        return $this->Club1_score;
    }

    public function setClub1Score(int $Club1_score): self
    {
        $this->Club1_score = $Club1_score;

        return $this;
    }

    public function getClub2Score(): ?int
    {
        return $this->Club2_score;
    }

    public function setClub2Score(int $Club2_score): self
    {
        $this->Club2_score = $Club2_score;

        return $this;
    }

    public function getClub2(): ?int
    {
        return $this->Club_2;
    }

    public function setClub2(int $Club_2): self
    {
        $this->Club_2 = $Club_2;

        return $this;
    }

    public function getStadium(): ?string
    {
        return $this->Stadium;
    }

    public function setStadium(string $Stadium): self
    {
        $this->Stadium = $Stadium;

        return $this;
    }
}
