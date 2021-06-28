<?php

namespace App\Controller\Admin;

use App\Entity\Vendeur;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\Field;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
class VendeurCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Vendeur::class;
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
            Field::new('nom'),
            Field::new('prenom'),
            Field::new('adresse'),
            Field::new('whatssap'),
            Field::new('email'),
            Field::new('telephonesav'),
            Field::new('affiliatecode'),
        ];
    }
}
