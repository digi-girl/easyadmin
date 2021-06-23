<?php

namespace App\Controller\Admin;

use App\Entity\MagWarehouse;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\FloatField;
use EasyCorp\Bundle\EasyAdminBundle\Field\Field;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
class MagWarehouseCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return MagWarehouse::class;
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
    public function configureCrud(Crud $crud):Crud 
    {
        return $crud
        ->setEntityLabelInPlural('Demande warehouse');
    }
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('SkuD','Sku de la demande'),
            Field::new('qte','Quantité'),
            DateTimeField::new('DateE','Date d\'envoi'),
            DateTimeField::new('DateR','Date de reception'),
            TextField::new('statut'),
        ];
    }

}
