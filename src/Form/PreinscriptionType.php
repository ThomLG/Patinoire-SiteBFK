<?php

namespace App\Form;

use App\Entity\Category;
use App\Entity\Preinscription;
use Doctrine\ORM\Mapping\Entity;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PreinscriptionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('preInscriptionLastName', TextType::class, ['label'=>'Nom'])
            ->add('preInscriptionFirstName', TextType::class, ['label'=>'Prénom'])
            ->add('preInscriptionDateBirth', DateType::class,['label'=>'Date de naissance'])
            ->add('preInscriptionEmail', TextType::class, ['label'=>'Adresse e-mail'])
            ->add('preInscriptionPhoneNumber',TextType::class, ['label'=>'Numéro de téléphone'])
            ->add('preInscriptionPosition',TextType::class, ['label'=>'Poste'])
            ->add('preInscriptionLastClub',TextType::class, ['label'=>'Dernier Club'])
            ->add('preInscriptionCategory',EntityType::class,[
                'class' => Category::class,
                'label'=>'Catégorie'])
            ->add('submit',SubmitType::class);
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Preinscription::class,
        ]);
    }
}
