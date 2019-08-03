<?php

namespace Todstoychev\TimestampableBundle\Subscriber;

use DateTime;
use Doctrine\Common\EventSubscriber;
use Doctrine\Common\Persistence\Event\LifecycleEventArgs;
use Doctrine\ORM\Events;
use Todstoychev\TimestampableBundle\Entity\TimestampableInterface;

/**
 * EntityListener
 *
 * @package Todstoychev\TimestampableBundle\Listener
 * @author  Todor Todorov <todstoychev@gmail.com>
 **/
class TimestampableEventSubscriber implements EventSubscriber
{
    /**
     * Returns an array of events this subscriber wants to listen to.
     *
     * @return array
     */
    public function getSubscribedEvents()
    {
        return [
            Events::prePersist,
            Events::preUpdate,
        ];
    }

    public function preUpdate(LifecycleEventArgs $args)
    {
        $this->index($args);
    }

    public function prePersist(LifecycleEventArgs $args)
    {
        $this->index($args);
    }

    public function index(LifecycleEventArgs $args)
    {
        $entity = $args->getObject();

        if ($entity instanceof TimestampableInterface) {
            $entity->setUpdatedAt(new DateTime('now'));

            if (null === $entity->getCreatedAt()) {
                $entity->setCreatedAt(new DateTime('now'));
            }
        }
    }
}