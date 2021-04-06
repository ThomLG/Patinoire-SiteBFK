<?php

namespace App\Form;

use App\Entity\Category;
use App\Entity\Preinscription;
use Doctrine\DBAL\Types\StringType;
use Doctrine\ORM\Mapping\Entity;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
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
            ->add('preInscriptionEmail', EmailType::class, ['label'=>'Adresse e-mail', ])
            ->add('preInscriptionPhoneNumber',TextType::class, ['label'=>'Numéro de téléphone', 'attr'=>['maxlength'=>10]])
            ->add('preInscriptionPosition',ChoiceType::class, ['label'=>'Poste',
                'choices'=>['Gardien de but'=>'Gardien de but',
                            'Défenseur'=>'Défenseur',
                            'Milieu de terrain'=>'Milieu de terrain',
                            'Attaquant'=>'Attaquant']
                ])
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
