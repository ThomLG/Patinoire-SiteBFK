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
            ->add('matchConvocation', EntityType::class,[// précise que l'input est lié à une Entité
                'class' => FootballMatch::class,// précise de quelle entité il s'agit
                'choice_label'=>function($footballMatch){
                return $footballMatch->__toString(); //j'appelle la méthode __toString présente dans l'entity FootballMatch
                },
                'label'=>'Match',//nom du champ côté front
                ])
            ->add('playerConvocation', EntityType::class,[// précise que l'input est lié à une Entité
                'class'=>Player::class,// précise de quelle entité il s'agit
                'multiple'=>true,// input de choix multiple
                'expanded'=>true,// ajoute la possibilité de cocher
                'label'=>'Joueurs',]) // nom du champ coté front
            ->add('submit',SubmitType::class, ['label'=>'Valider la convocation']);// ajoute un bouton de validation du formulaire
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => MatchConvocation::class,
            // activer, désactiver la protection CSRF pour ce formulaire
            'csrf_protection' => true,
            // le nom du champ HTML caché qui stocke le token
            'csrf_field_name' => '_token',
            //une chaîne arbitraire utilisée pour générer la valeur du jeton
            // utiliser une chaîne de caractère différente pour chaque formulaire améliore la sécurité
            'csrf_token_id'   => 'task_item',
        ]);
    }
}
