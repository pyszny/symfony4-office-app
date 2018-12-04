<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EmployeeRepository")
 */
class Employee
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $firstname;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lastname;

    /**
     * @ORM\Column(type="datetime")
     */
    private $created_at;

    /**
     * @ORM\Column(type="datetime")
     */
    private $updated_at;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Absence", mappedBy="employee")
     */
    private $absences;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\AbsenceApprovers", mappedBy="approver")
     */
    private $absenceApprovers;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\AbsenceReplacements", mappedBy="replacement")
     */
    private $absenceReplacements;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    public function __construct()
    {
        $this->absenceApprovers = new ArrayCollection();
        $this->absenceReplacements = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    public function setFirstname(string $firstname): self
    {
        $this->firstname = $firstname;

        return $this;
    }

    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    public function setLastname(string $lastname): self
    {
        $this->lastname = $lastname;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->created_at;
    }

    public function setCreatedAt(\DateTimeInterface $created_at): self
    {
        $this->created_at = $created_at;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updated_at;
    }

    public function setUpdatedAt(\DateTimeInterface $updated_at): self
    {
        $this->updated_at = $updated_at;

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

    /**
     * @return mixed
     */
    public function getAbsences()
    {
        return $this->absences;
    }

    /**
     * @param mixed $absences
     * @return Employee
     */
    public function setAbsences($absences)
    {
        $this->absences = $absences;
        return $this;
    }

    /**
     * @return Collection|AbsenceApprovers[]
     */
    public function getAbsenceApprovers(): Collection
    {
        return $this->absenceApprovers;
    }

    /**
     * @return Collection|AbsenceReplacements[]
     */
    public function getAbsenceReplacements(): Collection
    {
        return $this->absenceReplacements;
    }
}
