<?php

namespace App\Form;

use App\Entity\Contact;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('nom', TextType::class, [
            "attr" => [
                "class" => "form-control"
            ],
            "required" => "false"

        ])
        ->add('prenom', TextType::class, [
            "attr" => [
                "class" => "form-control"
            ],
            "required" => "false"
        ])
        ->add('email', EmailType::class, [
            "attr" => [
                "class" => "form-control"
            ],
            "required" => "false"
        ])
        ->add('message',  TextareaType::class, [
            "attr" => [
                "class" => "form-control"
            ],
            "required" => "false"
        ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Contact::class,
        ]);
    }
}