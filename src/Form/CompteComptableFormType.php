<?php

namespace App\Form;

use Symfony\Component\Form\Extension\Core\Type\NumberType;
use App\Entity\CompteComptable;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use App\Entity\SousClasse;
use App\Entity\Classe;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;

class CompteComptableFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('codeCompte', EntityType::class, [
            'class' => SousClasse::class,
            'choice_label' => 'nomSousClasse',
            'label' => 'Code',
            'placeholder' => 'Choisir un code',
            'attr' => [
                'class' => 'form-select'
            ]
        ])
        ->add('typeCompte', TextType::class, [
            'disabled' => true,
            'label' => 'Type de compte',
            'attr' => [
                'class' => 'form-control'
            ]
        ])
        ->add('numeroCompte', NumberType::class, [
            'label' => 'Numéro de compte',
            'attr' => [
                'class' => 'form-control',
                'placeholder' => 'Entrer le numéro'
            ]
        ])
        ->add('nomCompte', TextType::class, [
            'label' => 'Nom de compte',
            'attr' => [
                'class' => 'form-control',
                'placeholder' => 'Entrer le nom'
            ]
        ])
        ->add('soldeCompte', NumberType::class, [
            'label' => 'Solde de compte',
            'attr' => [
                'class' => 'form-control',
                'placeholder' => 'Entrer le solde'
            ]
        ])
        ->add('submit', SubmitType::class, [
            'label' => 'Enregistrer',
            'attr' => [
                'class' => 'btn btn-outline-primary'
            ]
        ])
            ->addEventListener(FormEvents::POST_SUBMIT, function (FormEvent $event) {
                $compteComptable = $event->getData();
                $sousClasse = $compteComptable->getCodeCompte();
                if ($sousClasse) {
                    $classe = $sousClasse->getClasseSousClasse();
                    if ($classe) {
                        $typeCompte = $classe->__toString();
                        $compteComptable->setTypeCompte($typeCompte);
                    }
                }
            })
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => CompteComptable::class,
        ]);
    }
}
