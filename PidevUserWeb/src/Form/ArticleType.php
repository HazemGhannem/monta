<?php

namespace App\Form;

use App\Entity\Article;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class ArticleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title',TextType::class,[
                'attr'=>[
                    'class'=>'form-control form-control-alternative'
                ]
            ])
            ->add('image',FileType::class,['mapped' => false,
                'attr' => array(
                    'accept' => 'image/jpeg,image/png',
                    'class'=>'form-control-file'
                ),

            ])
            ->add('contenu',TextareaType::class,[
                'attr'=>[
                    'class'=>'form-control form-control-alternative'
                ]
            ])
            //->add('creationDate')
            ->add('rating',TextType::class,[
                'attr'=>[
                    'class'=>'form-control form-control-alternative'
                ]
            ])
            ->add('blogueur')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Article::class,
        ]);
    }
}
