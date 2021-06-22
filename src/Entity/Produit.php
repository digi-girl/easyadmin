<?php

namespace App\Entity;

use App\Repository\ProduitRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProduitRepository::class)
 */
class Produit
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="blob")
     */
    private $PhotoP;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Logo;

    /**
     * @ORM\Column(type="float")
     */
    private $qte;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $RefInterne;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Variete;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Categorie;

    /**
     * @ORM\Column(type="float")
     */
    private $Longueur;

    /**
     * @ORM\Column(type="float")
     */
    private $Largeur;

    /**
     * @ORM\Column(type="float")
     */
    private $hauteur;

    /**
     * @ORM\Column(type="float")
     */
    private $poids;

    /**
     * @ORM\Column(type="float")
     */
    private $poidsV;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $TypeE;

    /**
     * @ORM\Column(type="float")
     */
    private $PruxV;

    /**
     * @ORM\Column(type="float")
     */
    private $ValeurD;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPhotoP()
    {
        return $this->PhotoP;
    }

    public function setPhotoP($PhotoP): self
    {
        $this->PhotoP = $PhotoP;

        return $this;
    }

    public function getLogo(): ?string
    {
        return $this->Logo;
    }

    public function setLogo(string $Logo): self
    {
        $this->Logo = $Logo;

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

    public function getRefInterne(): ?string
    {
        return $this->RefInterne;
    }

    public function setRefInterne(string $RefInterne): self
    {
        $this->RefInterne = $RefInterne;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->Nom;
    }

    public function setNom(string $Nom): self
    {
        $this->Nom = $Nom;

        return $this;
    }

    public function getVariete(): ?string
    {
        return $this->Variete;
    }

    public function setVariete(string $Variete): self
    {
        $this->Variete = $Variete;

        return $this;
    }

    public function getCategorie(): ?string
    {
        return $this->Categorie;
    }

    public function setCategorie(string $Categorie): self
    {
        $this->Categorie = $Categorie;

        return $this;
    }

    public function getLongueur(): ?float
    {
        return $this->Longueur;
    }

    public function setLongueur(float $Longueur): self
    {
        $this->Longueur = $Longueur;

        return $this;
    }

    public function getLargeur(): ?float
    {
        return $this->Largeur;
    }

    public function setLargeur(float $Largeur): self
    {
        $this->Largeur = $Largeur;

        return $this;
    }

    public function getHauteur(): ?float
    {
        return $this->hauteur;
    }

    public function setHauteur(float $hauteur): self
    {
        $this->hauteur = $hauteur;

        return $this;
    }

    public function getPoids(): ?float
    {
        return $this->poids;
    }

    public function setPoids(float $poids): self
    {
        $this->poids = $poids;

        return $this;
    }

    public function getPoidsV(): ?float
    {
        return $this->poidsV;
    }

    public function setPoidsV(float $poidsV): self
    {
        $this->poidsV = $poidsV;

        return $this;
    }

    public function getTypeE(): ?string
    {
        return $this->TypeE;
    }

    public function setTypeE(string $TypeE): self
    {
        $this->TypeE = $TypeE;

        return $this;
    }

    public function getPruxV(): ?float
    {
        return $this->PruxV;
    }

    public function setPruxV(float $PruxV): self
    {
        $this->PruxV = $PruxV;

        return $this;
    }

    public function getValeurD(): ?float
    {
        return $this->ValeurD;
    }

    public function setValeurD(float $ValeurD): self
    {
        $this->ValeurD = $ValeurD;

        return $this;
    }
}
