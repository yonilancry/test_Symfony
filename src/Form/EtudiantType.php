<?php

namespace App\Form;

use App\Entity\Etablissement;
use App\Entity\Etudiant;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class EtudiantType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {

        $builder
            ->add('nom')
            ->add('prenom')
            ->add('sexe', ChoiceType::class,[
                'choices'=>[
                    "Non binaire"=>0,
                    "Femme"=>1,
                    "Homme"=>2,
                ],
            ])
            ->add('anniversaire', DateType::class,[
                'years'=>range(1970,2023)

            ])
            ->add('etablissement',EntityType::class,[
                'class'=>Etablissement::class,
                'choice_label'=>'nom'
                ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Etudiant::class,
        ]);
    }
}
