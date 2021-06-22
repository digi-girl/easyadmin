<?php

namespace App\Controller\Admin;

use App\Entity\Produit;
use EasyCorp\Bundle\EasyAdminBundle\Field\Field;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ProduitCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Produit::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            Field::new('id'),
            Field::new('photo_p','Photo de produits'),
            Field::new('logo'),
            Field::new('qte'),
            Field::new('ref_interne'),
            Field::new('nom'),
            Field::new('variete'),
            Field::new('categorie'),
            Field::new('longueur'),
            Field::new('largeur'),
            Field::new('hauteur'),
            Field::new('poids'),
            Field::new('poids_v'),
            Field::new('type_e'),
            Field::new('prux_v'),
            Field::new('valeur_d'),
        ];
    }
}
