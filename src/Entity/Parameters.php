<?php

namespace App\Entity;

use App\Repository\ParametersRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ParametersRepository::class)]
class Parameters
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_IMMUTABLE)]
    private ?\DateTimeImmutable $date = null;

    #[ORM\Column(length: 255)]
    private ?string $stepOfDay = null;

    #[ORM\Column]
    private ?int $systole = null;

    #[ORM\Column]
    private ?int $diastole = null;

    #[ORM\Column(nullable: true)]
    private ?int $spo2 = null;

    #[ORM\Column(nullable: true)]
    private ?int $heartRate = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDate(): ?\DateTimeImmutable
    {
        return $this->date;
    }

    public function setDate(\DateTimeImmutable $date): static
    {
        $this->date = $date;

        return $this;
    }

    public function getStepOfDay(): ?string
    {
        return $this->stepOfDay;
    }

    public function setStepOfDay(string $stepOfDay): static
    {
        $this->stepOfDay = $stepOfDay;

        return $this;
    }

    public function getSystole(): ?int
    {
        return $this->systole;
    }

    public function setSystole(int $systole): static
    {
        $this->systole = $systole;

        return $this;
    }

    public function getDiastole(): ?int
    {
        return $this->diastole;
    }

    public function setDiastole(int $diastole): static
    {
        $this->diastole = $diastole;

        return $this;
    }

    public function getSpo2(): ?int
    {
        return $this->spo2;
    }

    public function setSpo2(?int $spo2): static
    {
        $this->spo2 = $spo2;

        return $this;
    }

    public function getHeartRate(): ?int
    {
        return $this->heartRate;
    }

    public function setHeartRate(?int $heartRate): static
    {
        $this->heartRate = $heartRate;

        return $this;
    }
}
