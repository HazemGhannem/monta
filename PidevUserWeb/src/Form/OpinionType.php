<?php

namespace App\Form;

use App\Entity\Opinion;
use Symfony\Component\Form\Extension\Core\Type\FloatType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
class OpinionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('commentaire',TextareaType::class,[
                'attr'=>[
                    'class'=>'form-control form-control-alternative'
                ]
            ])
            ->add('rating',TextType::class,[
                'attr'=>[
                    'class'=>'form-control form-control-alternative'
                ]
            ])
            //->add('creationDate')
            ->add('article')
            ->add('client')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Opinion::class,
        ]);
    }
}
