<?php

namespace App\Entity;

use App\Repository\BoutiqueRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=BoutiqueRepository::class)
 */
class Boutique
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $ID_Boutique;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $N_CMD;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Nom_ville_telephone;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $CRBT;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Prestataire;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $NumColis;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $TrackingD;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $TrackingN;

    /**
     * @ORM\Column(type="date")
     */
    private $DateS;

    /**
     * @ORM\Column(type="date")
     */
    private $DateM;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $EtatC;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $statut;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIDBoutique(): ?int
    {
        return $this->ID_Boutique;
    }

    public function setIDBoutique(int $ID_Boutique): self
    {
        $this->ID_Boutique = $ID_Boutique;

        return $this;
    }

    public function getNCMD(): ?string
    {
        return $this->N_CMD;
    }

    public function setNCMD(string $N_CMD): self
    {
        $this->N_CMD = $N_CMD;

        return $this;
    }

    public function getNomVilleTelephone(): ?string
    {
        return $this->Nom_ville_telephone;
    }

    public function setNomVilleTelephone(string $Nom_ville_telephone): self
    {
        $this->Nom_ville_telephone = $Nom_ville_telephone;

        return $this;
    }

    public function getCRBT(): ?string
    {
        return $this->CRBT;
    }

    public function setCRBT(string $CRBT): self
    {
        $this->CRBT = $CRBT;

        return $this;
    }

    public function getPrestataire(): ?string
    {
        return $this->Prestataire;
    }

    public function setPrestataire(string $Prestataire): self
    {
        $this->Prestataire = $Prestataire;

        return $this;
    }

    public function getNumColis(): ?string
    {
        return $this->NumColis;
    }

    public function setNumColis(string $NumColis): self
    {
        $this->NumColis = $NumColis;

        return $this;
    }

    public function getTrackingD(): ?string
    {
        return $this->TrackingD;
    }

    public function setTrackingD(string $TrackingD): self
    {
        $this->TrackingD = $TrackingD;

        return $this;
    }

    public function getTrackingN(): ?string
    {
        return $this->TrackingN;
    }

    public function setTrackingN(string $TrackingN): self
    {
        $this->TrackingN = $TrackingN;

        return $this;
    }

    public function getDateS(): ?\DateTimeInterface
    {
        return $this->DateS;
    }

    public function setDateS(\DateTimeInterface $DateS): self
    {
        $this->DateS = $DateS;

        return $this;
    }

    public function getDateM(): ?\DateTimeInterface
    {
        return $this->DateM;
    }

    public function setDateM(\DateTimeInterface $DateM): self
    {
        $this->DateM = $DateM;

        return $this;
    }

    public function getEtatC(): ?string
    {
        return $this->EtatC;
    }

    public function setEtatC(string $EtatC): self
    {
        $this->EtatC = $EtatC;

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
}
