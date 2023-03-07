<?php

namespace App\Form;

use Symfony\Component\Form\Extension\Core\Type\NumberType;
use App\Entity\Mouvement;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use App\Entity\CompteComptable;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class MouvementFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('dateMouvement')
            ->add('referenceMouvement', TextType::class, [
                'label' => 'Référence du mouvement',
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Entrer la référence'
                ]
            ])
            ->add('compteDebit', EntityType::class, [
                'class' => CompteComptable::class,
                'choice_label' => 'nomCompte',
                'label' => 'Compte débit',
                'placeholder' => 'Choisir un compte',
                'attr' => [
                    'class' => 'form-select'
                ]
            ])
            ->add('compteCredit', EntityType::class, [
                'class' => CompteComptable::class,
                'choice_label' => 'nomCompte',
                'label' => 'Compte crédit',
                'placeholder' => 'Choisir un compte',
                'attr' => [
                    'class' => 'form-select'
                ]
            ])
            ->add('montantMouvement', NumberType::class, [
                'label' => 'Montant du mouvement',
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Entrer le montant'
                ]
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'Enregistrer',
                'attr' => [
                    'class' => 'btn btn-outline-primary'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Mouvement::class,
        ]);
    }
}
