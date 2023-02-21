<?php

namespace App\Form;

use App\Entity\Reclamation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Validator\Constraints\Regex;
use Doctrine\ORM\EntityManagerInterface;

class ReclamationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('reference', TextType::class, [
            'label' => 'Référence',
            'attr' => [
                'placeholder' => 'Entrez la référence de la réclamation'
            ]
        ])
     
        ->add('nomD', TextType::class, [
            'label' => 'Nom',
            'attr' => [
                'placeholder' => 'Entrez le nom'
            ],
            'constraints' => [
                new Regex([
                    'pattern' => '/^[a-zA-Z]+$/',
                    'message' => 'Le nom ne doit contenir que des lettres.'
                ])
            ]
        ])
        
        ->add('prenomD', TextType::class, [
            'label' => 'Prenom',
            'attr' => [
                'placeholder' => 'Entrez le prenom'
            ],
            'constraints' => [
                new Regex([
                    'pattern' => '/^[a-zA-Z]+$/',
                    'message' => 'Le prenom ne doit contenir que des lettres.'
                ])
            ]
        ])
        ->add('cin', IntegerType::class, [
            'label' => 'CIN',
            'attr' => [
                'placeholder' => 'Entrez le numéro de CIN'
            ]
        ])
        ->add('email', EmailType::class, [
            'label' => 'Email',
            'attr' => [
                'placeholder' => 'Entrez l\'email'
            ]
        ])
        ->add('tel', IntegerType::class, [
            'label' => 'Téléphone',
            'attr' => [
                'placeholder' => 'Entrez le numéro de téléphone'
            ]
        ])
        ->add('commentaire', TextareaType::class, [
            'label' => 'Commentaire',
            'attr' => [
                'placeholder' => 'Entrez le commentaire'
            ]
        ])
        ->add('file', FileType::class, [
            'mapped' => false,
            'required' => false,
        ])
 
        
        
        ;
}


    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Reclamation::class,
        ]);
    }
}
