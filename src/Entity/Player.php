<?php

namespace App\Entity;

use App\Repository\PlayerRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PlayerRepository::class)]
class Player
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $Player_ID = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column]
    private ?int $Club_ID = null;

    #[ORM\Column]
    private ?int $Number = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPlayerID(): ?int
    {
        return $this->Player_ID;
    }

    public function setPlayerID(int $Player_ID): self
    {
        $this->Player_ID = $Player_ID;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getClubID(): ?int
    {
        return $this->Club_ID;
    }

    public function setClubID(int $Club_ID): self
    {
        $this->Club_ID = $Club_ID;

        return $this;
    }

    public function getNumber(): ?int
    {
        return $this->Number;
    }

    public function setNumber(int $Number): self
    {
        $this->Number = $Number;

        return $this;
    }
}
