<?php

namespace App\Form;

use App\Entity\Blogueur;
use App\Entity\Opinion;
use App\Entity\Signalement;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SignalementType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            // adf session
            ->add('blogueur', EntityType::class, [
                'class' => Blogueur::class,
                'choice_label' => 'name',
                'multiple' => false])
            ->add('description',TextType::class,[
                'attr'=>[
                    'class'=>'form-control form-control-alternative'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Signalement::class,
        ]);
    }
}
