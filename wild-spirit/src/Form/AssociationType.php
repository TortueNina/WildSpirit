<?php

namespace App\Form;

use App\Entity\Category;
use App\Entity\Association;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Vich\UploaderBundle\Entity\File;
use Symfony\Component\Validator\Constraints\File;

class AssociationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('title')
            ->add('description')
            ->add('creation_date')
            ->add('address_number')
            ->add('address_street')
            ->add('address_town')
            ->add('address_postcode')
            ->add('website')
            ->add('telephone')
            ->add('mail')
            ->add('isRefuge')
            ->add('picture', FileType::class, [
                'label' => 'Picture',

                // unmapped means that this field is not associated to any entity property
                'mapped' => false,

                // make it optional so you don't have to re-upload the PNG/JPG file
                // everytime you edit the Product details
                'required' => false,

                // unmapped fields can't define their validation using annotations
                // in the associated entity, so you can use the PHP constraint classes
                'constraints' => [
                    new File([
                        'maxSize' => '1024k',
                        'mimeTypes' => [
                            'PNG',
                            'JPG',
                        ],
                        'mimeTypesMessage' => 'Please upload a valid PNG or JPN document',
                    ])
                ],
            ])
            ->add('category', EntityType::class, [
                'class' => Category::class,
                'multiple' => true,
                'expanded' => true,
                'by_reference' => false,
                'choice_label' => 'name',
            ]);
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Association::class,
        ]);
    }
}
