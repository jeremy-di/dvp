<?php

namespace App\Form;

use App\Entity\Parameters;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

class ParametersType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('stepOfDay', ChoiceType::class, [
                'label' => "Moment de la journée",
                'choices' => [
                    'Matin' => 'Matin',
                    'Soir' => 'Soir'
                ],
                "label_attr" => [
                    "class" => 'para_label'
                ],
                "attr" => [
                    "class" => "para_input"
                ]
            ])
            ->add('systole', IntegerType::class, [
                'label' => 'Systole',
                "label_attr" => [
                    "class" => 'para_label'
                ],
                "attr" => [
                    "class" => "para_input"
                ]
            ])
            ->add('diastole', IntegerType::class, [
                'label' => 'Diastole',
                "label_attr" => [
                    "class" => 'para_label'
                ],
                "attr" => [
                    "class" => "para_input"
                ]
            ])
            ->add('spo2', IntegerType::class, [
                'label' => 'SPO²',
                "label_attr" => [
                    "class" => 'para_label'
                ],
                "attr" => [
                    "class" => "para_input"
                ]
            ])
            ->add('heartRate', IntegerType::class, [
                'label' => 'BPM',
                "label_attr" => [
                    "class" => 'para_label'
                ],
                "attr" => [
                    "class" => "para_input"
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Parameters::class,
        ]);
    }
}
