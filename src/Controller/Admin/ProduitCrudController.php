<?php

namespace App\Controller\Admin;

use App\Entity\Produit;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Field\Field;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ProduitCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Produit::class;
    }
    public function configureActions(Actions $actions):Actions
    {
        return $actions
        ->update(Crud::PAGE_INDEX, Action::NEW,
        fn (Action $action) =>  $action->setLabel("Ajouter une demande")->setIcon('fa fa-plus')->addCssClass('btn btn-success'))
        ->add(Crud::PAGE_INDEX, Action::DETAIL)
        ->update(Crud::PAGE_INDEX, Action::EDIT,
        fn (Action $action) =>  $action->setLabel("Modifier")->setIcon('fa fa-edit')->addCssClass('btn btn-warning'))
        ->update(Crud::PAGE_INDEX, Action::DETAIL,
        fn (Action $action) =>  $action->setLabel("Voir")->setIcon('fa fa-eye')->addCssClass('btn btn-info'))
        ->update(Crud::PAGE_INDEX, Action::DELETE,
        fn (Action $action) =>  $action->setLabel("Supprimer")->setIcon('fa fa-trash')->addCssClass('btn btn-outline-danger'));
    }
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            ImageField::new('photo_p','Photo de produits')
                ->setBasePath('/uploads/photos'),
            TextField::new('logo'),
            Field::new('qte'),
            IntegerField::new('ref_interne'),
            TextField::new('nom'),
            TextField::new('variete'),
            TextField::new('categorie'),
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
