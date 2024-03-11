<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\PokemonsRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PokemonsRepository::class)]
#[ApiResource]
class Pokemons
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $description = null;

    #[ORM\Column]
    private ?int $atk = null;

    #[ORM\Column]
    private ?int $def = null;

    #[ORM\Column]
    private ?int $ps = null;

    #[ORM\Column]
    private ?int $s_atk = null;

    #[ORM\Column]
    private ?int $s_def = null;

    #[ORM\Column]
    private ?int $speed = null;

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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getAtk(): ?int
    {
        return $this->atk;
    }

    public function setAtk(int $atk): static
    {
        $this->atk = $atk;

        return $this;
    }

    public function getDef(): ?int
    {
        return $this->def;
    }

    public function setDef(int $def): static
    {
        $this->def = $def;

        return $this;
    }

    public function getPs(): ?int
    {
        return $this->ps;
    }

    public function setPs(int $ps): static
    {
        $this->ps = $ps;

        return $this;
    }

    public function getSAtk(): ?int
    {
        return $this->s_atk;
    }

    public function setSAtk(int $s_atk): static
    {
        $this->s_atk = $s_atk;

        return $this;
    }

    public function getSDef(): ?int
    {
        return $this->s_def;
    }

    public function setSDef(int $s_def): static
    {
        $this->s_def = $s_def;

        return $this;
    }

    public function getSpeed(): ?int
    {
        return $this->speed;
    }

    public function setSpeed(int $speed): static
    {
        $this->speed = $speed;

        return $this;
    }
}
