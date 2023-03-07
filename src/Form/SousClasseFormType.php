<?php

namespace App\Form;

use App\Entity\SousClasse;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use App\Entity\Classe;

class SousClasseFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('codeSousClasse', TextType::class, [
                'label' => 'Code de la sous-classe',
                'attr' => [
                    'placeholder' => 'Entrer le code'
                ]
            ])
            ->add('nomSousClasse', TextType::class, [
                'label' => 'Nom de la sous-classe',
                'attr' => [
                    'placeholder' => 'Entrer le nom'
                ]
            ])
            ->add('classeSousClasse', EntityType::class, [
                'class' => Classe::class,
                'choice_label' => 'nomClasse',
                'label' => 'Classe',
                'placeholder' => 'Choisir une classe'
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'Enregistrer'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => SousClasse::class,
        ]);
    }
}
