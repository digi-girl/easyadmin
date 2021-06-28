<?php

namespace App\Controller\Admin;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\Field;
use App\Entity\Boutique;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;

class BoutiqueCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Boutique::class;
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
            IdField::new('ID_Boutique'),
            Field::new('N_CMD','Numero de commande'),
            Field::new('Nom_ville_telephone'),
            Field::new('prestataire')->hideOnIndex(),
            Field::new('tracking_d','tracking Direct')->hideOnIndex(),
            Field::new('tracking_n','tracking Number')->hideOnIndex(),
            Field::new('statut')->hideOnIndex(),
            Field::new('CRBT'),
            Field::new('NumColis','Numero de colis'),
            Field::new('EtatC','Etat de colis'),
            Field::new('DateS','Date de saisi'),
        ];
    }
}
