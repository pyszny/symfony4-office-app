<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AbsenceReplacementsRepository")
 */
class AbsenceReplacements
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * todo connect to employee
     * @ORM\Column(type="integer")
     */
    private $replacement_id;

    /**
     * todo connect to absence
     * @ORM\Column(type="integer")
     */
    private $absence_id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $created_at;

    /**
     * @ORM\Column(type="datetime")
     */
    private $updated_at;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $comment;

    /**
     * todo connect to status
     * @ORM\Column(type="integer")
     */
    private $status_id;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getReplacementId(): ?int
    {
        return $this->replacement_id;
    }

    public function setReplacementId(int $replacement_id): self
    {
        $this->replacement_id = $replacement_id;

        return $this;
    }

    public function getAbsenceId(): ?int
    {
        return $this->absence_id;
    }

    public function setAbsenceId(int $absence_id): self
    {
        $this->absence_id = $absence_id;

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

    public function getComment(): ?string
    {
        return $this->comment;
    }

    public function setComment(?string $comment): self
    {
        $this->comment = $comment;

        return $this;
    }

    public function getStatusId(): ?int
    {
        return $this->status_id;
    }

    public function setStatusId(int $status_id): self
    {
        $this->status_id = $status_id;

        return $this;
    }
}
