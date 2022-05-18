<?php

namespace App\Form;

use App\Entity\Chambre;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ChambreType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Type',
                ChoiceType::class,
                [
                    'choices' => [""=>"",
                        'Single' => "Single",
                        'Double' => "Double",
                        'Triple' => "Triple",
                        'Suite' => "Suite"
                    ],
                ])
            ->add('nbLits', ChoiceType::class,[
                'choices' => [
                    '1 ' => '1',
                    '2' => '2',
                    '3' => '3',
                    '4' => '4'
                ],
                'expanded' => true
            ])
            ->add('etage')
            ->add('prix')
            ->add('vue', ChoiceType::class,[
                'choices' => [
                    'Vue sur Mer' => 'Vue sur Mer',
                    'Vue piscine' => 'Vue piscine',

                ],
                'expanded' => true
            ])
            ->add('hotel')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Chambre::class,
        ]);
    }
}
