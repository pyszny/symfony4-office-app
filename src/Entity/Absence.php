<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AbsenceRepository")
 */
class Absence
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Employee", inversedBy="absences")
     */
    private $employee;

    /**
     * @ORM\Column(type="date")
     */
    private $start_date;

    /**
     * @ORM\Column(type="date")
     */
    private $end_date;

    /**
     * @ORM\Column(type="datetime")
     */
    private $created_at;

    /**
     * @ORM\Column(type="datetime")
     */
    private $updated_at;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Status", inversedBy="absences")
     */
    private $status;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\AbsenceApprovers", mappedBy="approver")
     */
    private $absenceApprovers;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\AbsenceReplacements", mappedBy="replacement")
     */
    private $absenceReplacements;

    public function __construct()
    {
        $this->absenceApprovers = new ArrayCollection();
        $this->absenceReplacements = new ArrayCollection();
        $this->created_at = new \DateTime();

        if($this->updated_at == null) {
            $this->updated_at = new \DateTime();
        }
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getEmployee()
    {
        return $this->employee;
    }

    /**
     * @param mixed $employee
     * @return Absence
     */
    public function setEmployee($employee)
    {
        $this->employee = $employee;

        return $this;
    }

    public function getStartDate(): ?\DateTimeInterface
    {
        return $this->start_date;
    }

    public function setStartDate(\DateTimeInterface $start_date): self
    {
        $this->start_date = $start_date;

        return $this;
    }

    public function getEndDate(): ?\DateTimeInterface
    {
        return $this->end_date;
    }

    public function setEndDate(\DateTimeInterface $end_date): self
    {
        $this->end_date = $end_date;

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

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($status)
    {
        $this->status = $status;

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
