<?php

namespace App\Entity;

use App\Repository\MedicalExaminationRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MedicalExaminationRepository::class)]
class MedicalExamination
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $type = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $reason = null;

    #[ORM\Column(length: 255)]
    private ?string $protocolNumber = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $protocolDate = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $dateOfExamination = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $resultOfExamination = null;

    #[ORM\ManyToOne(inversedBy: 'medicalExaminations')]
    private ?Patient $patient = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getReason(): ?string
    {
        return $this->reason;
    }

    public function setReason(?string $reason): self
    {
        $this->reason = $reason;

        return $this;
    }

    public function getProtocolNumber(): ?string
    {
        return $this->protocolNumber;
    }

    public function setProtocolNumber(string $protocolNumber): self
    {
        $this->protocolNumber = $protocolNumber;

        return $this;
    }

    public function getProtocolDate(): ?\DateTimeInterface
    {
        return $this->protocolDate;
    }

    public function setProtocolDate(?\DateTimeInterface $protocolDate): self
    {
        $this->protocolDate = $protocolDate;

        return $this;
    }

    public function getDateOfExamination(): ?\DateTimeInterface
    {
        return $this->dateOfExamination;
    }

    public function setDateOfExamination(?\DateTimeInterface $dateOfExamination): self
    {
        $this->dateOfExamination = $dateOfExamination;

        return $this;
    }

    public function getResultOfExamination(): ?string
    {
        return $this->resultOfExamination;
    }

    public function setResultOfExamination(?string $resultOfExamination): self
    {
        $this->resultOfExamination = $resultOfExamination;

        return $this;
    }

    public function getPatient(): ?Patient
    {
        return $this->patient;
    }

    public function setPatient(?Patient $patient): self
    {
        $this->patient = $patient;

        return $this;
    }
}
