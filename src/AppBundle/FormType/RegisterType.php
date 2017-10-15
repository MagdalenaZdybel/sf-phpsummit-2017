<?php

namespace AppBundle\FormType;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\NotBlank;

class RegisterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add(
                'email',
                EmailType::class,
                [
                    'required' => false,
                    'constraints' => [new NotBlank()]
                ]
            )
                ->add(
                 'surname',
                 \Symfony\Component\Form\Extension\Core\Type\TextType::class   )
                 ->add(
                 'name',
                 \Symfony\Component\Form\Extension\Core\Type\TextType::class   )
            ->add(
                'password',
                PasswordType::class,
                [
                    'required' => false,
                    'constraints' => [new NotBlank()]
                ]
            )
            ->add('submit', SubmitType::class, ['label' => 'Register'])
        ;
    }
}