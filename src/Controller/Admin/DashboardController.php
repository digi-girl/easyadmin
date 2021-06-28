<?php

namespace App\Controller\Admin;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\MagWarehouse;
use App\Entity\Produit;
use App\Entity\Vendeur;
use App\Entity\Boutique;
use App\Repository\ProduitRepository;
use App\Repository\BoutiqueRepository;
use App\Repository\MagWarehouseRepository;
use App\Entity\Fournisseur;

class DashboardController extends AbstractDashboardController
{   protected $ProduitRepository;
    protected $MagWarehouseRepository;
    public function __construct(ProduitRepository $ProduitRepository,
    MagWarehouseRepository $MagWarehouseRepository,
    BoutiqueRepository $BoutiqueRepository
    ){
        $this->ProduitRepository=$ProduitRepository;
        $this->MagWarehouseRepository=$MagWarehouseRepository;
        $this->BoutiqueRepository=$BoutiqueRepository;
    }
    /**
     * @Route("/magasinier", name="admin")
     */
    public function index(): Response
    {   
        return $this->render('bundles/EasyAdminBundle/welcome.html.twig', [
            'countAllProduct'=>$this->ProduitRepository->countAllProduct(),
            'countAllDemand' =>$this->MagWarehouseRepository->countAllDemand(),
            'countAllLiv' => $this->BoutiqueRepository->countAllLiv()
        ]);
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Easyadmin');
    }

    public function configureMenuItems(): iterable
    {
        return[
        MenuItem::linktoDashboard('Tableau de bord', 'fa fa-home'),
        MenuItem::subMenu('Arrivage', 'fas fa-shopping-basket')->setSubItems([
         MenuItem::linkToCrud('Liste des demandes', 'fa fa-search',MagWarehouse::class),
         MenuItem::linkToCrud('Demandes de produits', 'fas fa-store-alt',Produit::class),
         MenuItem::linkToCrud('Coordonnees vendeurs', 'fa fa-calendar',Vendeur::class),
         MenuItem::linkToCrud('Coordonnees fournisseurs', 'fas fa-users-cog',Fournisseur::class),
        // yield MenuItem::linkToCrud('The Label', 'fas fa-list', EntityClass::class);
        ]),
        MenuItem::subMenu('Livraison', 'fas fa-shopping-cart')->setSubItems([
            MenuItem::linkToCrud('Boutique', 'fas fa-store',Boutique::class),
        ])
        ];
    }}
