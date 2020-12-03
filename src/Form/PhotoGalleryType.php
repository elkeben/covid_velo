<?php

namespace App\Form;

use App\Entity\PhotoGallery;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PhotoGalleryType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('photos',
                CollectionType::class,
                [
                    'allow_add' => true,
                    'allow_delete' => true,
                    'error_bubbling' => false,
                    'label' => false,
                    'entry_type' => PhotoType::class
                ]
            )
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => PhotoGallery::class,
        ]);
    }
}
