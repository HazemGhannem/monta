<?php

namespace App\Form;

use App\Entity\Reclammation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ReclammationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('objet', ChoiceType::class, [
                'attr' => ['class' => 'form-control'],
                'choices'  => [
                    '' => '',
                    'Test' => 'Test',
                    'Autre' => 'Autre',
                ],
            ])
            ->add('message', TextareaType::class, [
                'attr' => ['class' => 'form-control'],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Reclammation::class,
        ]);
    }
}
