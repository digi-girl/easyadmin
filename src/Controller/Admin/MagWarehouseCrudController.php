<?php

namespace App\Controller\Admin;

use App\Entity\MagWarehouse;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class MagWarehouseCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return MagWarehouse::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
