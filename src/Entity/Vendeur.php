<?php


namespace App\Entity;
use App\Repository\VendeurRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * Vendeur
 *
 * @ORM\Table(name="vendeur")
 * @ORM\Entity
 */
class Vendeur
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255, nullable=false)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255, nullable=false)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="whatssap", type="string", length=255, nullable=false)
     */
    private $whatssap;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255, nullable=false)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="telephonesav", type="string", length=255, nullable=false)
     */
    private $telephonesav;

    /**
     * @var string
     *
     * @ORM\Column(name="boutique", type="string", length=255, nullable=false)
     */
    private $boutique;

    /**
     * @var string
     *
     * @ORM\Column(name="packwerhousing", type="string", length=255, nullable=false)
     */
    private $packwerhousing;

    /**
     * @var string
     *
     * @ORM\Column(name="packdropshipping", type="string", length=255, nullable=false)
     */
    private $packdropshipping;

    /**
     * @var string|null
     *
     * @ORM\Column(name="affiliatecode", type="string", length=255, nullable=true)
     */
    private $affiliatecode;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="accepted", type="boolean", nullable=true)
     */
    private $accepted;

    public function getId(): ?int
    {
        return $this->id;
    }
    public function getnom():?string
    {
        return $this->nom;
    }
    public function setnom($nom)
    {
        $this->nom=$nom;
        return $nom;
    }
    public function getprenom():?string
    {
        return $this->prenom;
    }
    public function getadresse():?string
    {
        return $this->adresse;
    }
    public function getwhatssap():?string
    {
        return $this->whatssap;
    }
    public function getemail():?string
    {
        return $this->email;
    }
    public function getpassword():?string
    {
        return $this->password;
    }
    public function gettelephonesav():?string
    {
        return $this->telephonesav;
    }
    public function getboutique():?string
    {
        return $this->boutique;
    }
    public function getaffiliatecode():?string
    {
        return $this->affiliatecode;
    }
    public function setId($id){
        $this->id=$id;
        return $this;
    }
    public function setAdresse($adresse){
        $this->adresse=$adresse;
        return $this;
    }
}
