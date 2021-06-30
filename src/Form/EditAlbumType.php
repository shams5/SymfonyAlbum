<?php

namespace App\Form;

use App\Entity\Album;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class EditAlbumType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, [
                "label" => 'Nom'
            ])
            ->add('subject', TextareaType::class, [
                "label" => "Subject"
            ])
            ->add('imgPrix', NumberType::class, [
                'label' => 'prix de l\'image'
            ])
            ->add('imgUrl', TextType::class, [
                'label' => 'Adresse de l\'image'
            ])
            ->add('creationeDate', DateType::class, [
                'label' => 'Date'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Album::class,
        ]);
    }
}
