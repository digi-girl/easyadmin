<?php

namespace App\Entity;

use App\Repository\FournisseurRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FournisseurRepository::class)
 */
class Fournisseur
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
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prenom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adresse;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $whatssap;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $password;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $telephonesav;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $boutique;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $packwerhousing;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $packdropshipping;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $affiliatecode;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getWhatssap(): ?string
    {
        return $this->whatssap;
    }

    public function setWhatssap(string $whatssap): self
    {
        $this->whatssap = $whatssap;

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

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getTelephonesav(): ?string
    {
        return $this->telephonesav;
    }

    public function setTelephonesav(string $telephonesav): self
    {
        $this->telephonesav = $telephonesav;

        return $this;
    }

    public function getBoutique(): ?string
    {
        return $this->boutique;
    }

    public function setBoutique(string $boutique): self
    {
        $this->boutique = $boutique;

        return $this;
    }

    public function getPackwerhousing(): ?string
    {
        return $this->packwerhousing;
    }

    public function setPackwerhousing(string $packwerhousing): self
    {
        $this->packwerhousing = $packwerhousing;

        return $this;
    }

    public function getPackdropshipping(): ?string
    {
        return $this->packdropshipping;
    }

    public function setPackdropshipping(string $packdropshipping): self
    {
        $this->packdropshipping = $packdropshipping;

        return $this;
    }

    public function getAffiliatecode(): ?string
    {
        return $this->affiliatecode;
    }

    public function setAffiliatecode(string $affiliatecode): self
    {
        $this->affiliatecode = $affiliatecode;

        return $this;
    }
}
