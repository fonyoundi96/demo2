<?php

declare(strict_types=1);

namespace App\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use App\Entity\Cathegorie;

final class ArticleAdmin extends AbstractAdmin
{

    protected function configureDatagridFilters(DatagridMapper $datagridMapper): void
    {
        $datagridMapper
            ->add('id')
            ->add('title')
            ->add('content')
            ->add('img')
            ->add('createAt')
            ;
    }

    protected function configureListFields(ListMapper $listMapper): void
    {
        $listMapper

            ->add('title')
            ->add('content')
            ->add('img')
            ->add('createAt')
            ->add('_action', null, [
                'actions' => [
                    'show' => [],
                    'edit' => [],
                    'delete' => [],
                ],
            ]);
    }

    protected function configureFormFields(FormMapper $formMapper): void
    {
        $formMapper
        
            ->add('title')
            ->add('content')
            ->add('img')
            ->add('cathegorie', EntityType::class, [
                'class' => cathegorie::class,
                'choice_label' => 'title'
            ])
            ->add('createAt')
            ;
    }

    protected function configureShowFields(ShowMapper $showMapper): void
    {
        $showMapper
        
            ->add('title')
            ->add('content')
            ->add('img')
            ->add('createAt')
            ;
    }
}
