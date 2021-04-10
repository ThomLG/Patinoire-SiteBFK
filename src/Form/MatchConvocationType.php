<?php

namespace App\Form;

use App\Entity\FootballMatch;
use App\Entity\MatchConvocation;
use App\Entity\Player;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MatchConvocationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('matchConvocation', EntityType::class,[
                'class' => FootballMatch::class,
                'choice_label'=>function($footballMatch){
                return $footballMatch->getBfkTeam()." - ".$footballMatch->getBfkTeamOpponent();// mise en forme du select avec des fonctions présentes dans  le fichier FootballMatchEntity
                },
                'label'=>'Match'])
            ->add('playerConvocation', EntityType::class,[
                'class'=>Player::class,
                'multiple'=>true,
                'expanded'=>true,
                'label'=>'Joueurs'])
            ->add('submit',SubmitType::class, ['label'=>'Valider la convocation']);
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => MatchConvocation::class,
        ]);
    }
}
