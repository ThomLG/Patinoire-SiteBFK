<?php


namespace App\EventSubscriber;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use EasyCorp\Bundle\EasyAdminBundle\Event\BeforeEntityPersistedEvent;
use EasyCorp\Bundle\EasyAdminBundle\Event\BeforeEntityUpdatedEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class EasyAdminSubscriber implements EventSubscriberInterface
{
    private $entityManager;
    private $passwordEncoder;

    public function __construct(EntityManagerInterface $entityManager, UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->entityManager = $entityManager;
        $this->passwordEncoder = $passwordEncoder;
    }

    public static function getSubscribedEvents()
    {
        return [ // 2 events possibles : soit une création, soit une mise à jour
            BeforeEntityPersistedEvent::class => ['addUser'],
            BeforeEntityUpdatedEvent::class => ['updateUser'], //surtout utile lors d'un reset de mot passe plutôt qu'un réel update, car l'update va de nouveau encrypter le mot de passe DEJA encrypté ...
        ];
    }

    public function updateUser(BeforeEntityUpdatedEvent $event) // mise à jour de l'user
    {
        $entity = $event->getEntityInstance();

        if (!($entity instanceof User)) { // si c'est différent d'une instanciation (existe déjà), on retourne rien
            return;
        }
        $this->setPassword($entity); // sinon on fixe (crée) le mot de passe
    }

    public function addUser(BeforeEntityPersistedEvent $event) // on ajoute un nouvel user
    {
        $entity = $event->getEntityInstance();

        if (!($entity instanceof User)) {// si c'est différent d'une instanciation (existe déjà), on retourne rien
            return;
        }
        $this->setPassword($entity); // sinon on fixe (crée) le mot de passe
    }

    /**
     * @param User $entity
     */
    public function setPassword(User $entity): void
    {
        $pass = $entity->getPassword();

        $entity->setPassword($this->passwordEncoder->encodePassword($entity, $pass));
        $this->entityManager->persist($entity); //signale à doctrine que l'objet doit être enregistré.
        $this->entityManager->flush(); //envoi à la base de donnée
    }

}
