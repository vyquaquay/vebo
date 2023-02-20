<?php

namespace App\Entity;

use App\Repository\ClubRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ClubRepository::class)]
class Club
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $Club_ID = null;

    #[ORM\Column(length: 255)]
    private ?string $Name = null;

    #[ORM\Column(length: 255)]
    private ?string $Player = null;

    #[ORM\Column(length: 255)]
    private ?string $Coach = null;

    #[ORM\Column(length: 255)]
    private ?string $Host_Stadium = null;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getName(): ?string
    {
        return $this->Name;
    }

    public function setName(string $Name): self
    {
        $this->Name = $Name;

        return $this;
    }

    public function getPlayer(): ?string
    {
        return $this->Player;
    }

    public function setPlayer(string $Player): self
    {
        $this->Player = $Player;

        return $this;
    }

    public function getCoach(): ?string
    {
        return $this->Coach;
    }

    public function setCoach(string $Coach): self
    {
        $this->Coach = $Coach;

        return $this;
    }

    public function getHostStadium(): ?string
    {
        return $this->Host_Stadium;
    }

    public function setHostStadium(string $Host_Stadium): self
    {
        $this->Host_Stadium = $Host_Stadium;

        return $this;
    }
}
