<?php

namespace App\Entity;

use App\Repository\PatientRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PatientRepository::class)]
class Patient
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255)]
    private ?string $surname = null;

    #[ORM\Column(length: 16)]
    private ?string $fiscal_code = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $email = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $phone_number = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $birth_date = null;

    #[ORM\Column(length: 255)]
    private ?string $birth_place = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $gender = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $city_of_residence = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $street = null;

    #[ORM\OneToMany(mappedBy: 'relation', targetEntity: MedicalExamination::class)]
    private Collection $medicalExaminations;

    public function __construct()
    {
        $this->medicalExaminations = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    public function getSurname(): ?string
    {
        return $this->surname;
    }

    public function setSurname(string $surname): self
    {
        $this->surname = $surname;

        return $this;
    }

    public function getFiscalCode(): ?string
    {
        return $this->fiscal_code;
    }

    public function setFiscalCode(string $fiscal_code): self
    {
        $this->fiscal_code = $fiscal_code;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getPhoneNumber(): ?string
    {
        return $this->phone_number;
    }

    public function setPhoneNumber(?string $phone_number): self
    {
        $this->phone_number = $phone_number;

        return $this;
    }

    public function getBirthDate(): ?\DateTimeInterface
    {
        return $this->birth_date;
    }

    public function setBirthDate(\DateTimeInterface $birth_date): self
    {
        $this->birth_date = $birth_date;

        return $this;
    }

    public function getBirthPlace(): ?string
    {
        return $this->birth_place;
    }

    public function setBirthPlace(string $birth_place): self
    {
        $this->birth_place = $birth_place;

        return $this;
    }

    public function getGender(): ?string
    {
        return $this->gender;
    }

    public function setGender(?string $gender): self
    {
        $this->gender = $gender;

        return $this;
    }

    public function getCityOfResidence(): ?string
    {
        return $this->city_of_residence;
    }

    public function setCityOfResidence(?string $city_of_residence): self
    {
        $this->city_of_residence = $city_of_residence;

        return $this;
    }

    public function getStreet(): ?string
    {
        return $this->street;
    }

    public function setStreet(?string $street): self
    {
        $this->street = $street;

        return $this;
    }

    /**
     * @return Collection<int, MedicalExamination>
     */
    public function getMedicalExaminations(): Collection
    {
        return $this->medicalExaminations;
    }

    public function addMedicalExamination(MedicalExamination $medicalExamination): self
    {
        if (!$this->medicalExaminations->contains($medicalExamination)) {
            $this->medicalExaminations->add($medicalExamination);
            $medicalExamination->setPatient($this);
        }

        return $this;
    }

    public function removeMedicalExamination(MedicalExamination $medicalExamination): self
    {
        if ($this->medicalExaminations->removeElement($medicalExamination)) {
            // set the owning side to null (unless already changed)
            if ($medicalExamination->getPatient() === $this) {
                $medicalExamination->setPatient(null);
            }
        }

        return $this;
    }
}
