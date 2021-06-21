<?php

namespace App\Entity;

use App\Repository\MagWarehouseRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MagWarehouseRepository::class)
 */
class MagWarehouse
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $SkuD;

    /**
     * @ORM\Column(type="float")
     */
    private $qte;

    /**
     * @ORM\Column(type="date")
     */
    private $DateE;

    /**
     * @ORM\Column(type="date")
     */
    private $dateR;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $statut;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Liste;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSkuD(): ?string
    {
        return $this->SkuD;
    }

    public function setSkuD(string $SkuD): self
    {
        $this->SkuD = $SkuD;

        return $this;
    }

    public function getQte(): ?float
    {
        return $this->qte;
    }

    public function setQte(float $qte): self
    {
        $this->qte = $qte;

        return $this;
    }

    public function getDateE(): ?\DateTimeInterface
    {
        return $this->DateE;
    }

    public function setDateE(\DateTimeInterface $DateE): self
    {
        $this->DateE = $DateE;

        return $this;
    }

    public function getDateR(): ?\DateTimeInterface
    {
        return $this->dateR;
    }

    public function setDateR(\DateTimeInterface $dateR): self
    {
        $this->dateR = $dateR;

        return $this;
    }

    public function getStatut(): ?string
    {
        return $this->statut;
    }

    public function setStatut(string $statut): self
    {
        $this->statut = $statut;

        return $this;
    }

    public function getListe(): ?string
    {
        return $this->Liste;
    }

    public function setListe(string $Liste): self
    {
        $this->Liste = $Liste;

        return $this;
    }
}
