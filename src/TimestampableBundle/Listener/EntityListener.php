<?php

namespace Todstoychev\TimestampableBundle\Listener;

use Doctrine\ORM\Event\LifecycleEventArgs;
use Doctrine\ORM\Event\PreUpdateEventArgs;
use Exception;
use Todstoychev\TimestampableBundle\Entity\TimestampableInterface;

/**
 * EntityListener
 *
 * @package Todstoychev\TimestampableBundle\Listener
 * @author Todor Todorov <todstoychev@gmail.com>
 **/
class EntityListener implements EntityListenerInterface
{
    /** @PreUpdate
     * @param TimestampableInterface $entity
     * @param PreUpdateEventArgs $event
     * @throws Exception
     */
    public function preUpdateHandler(TimestampableInterface $entity, PreUpdateEventArgs $event)
    {
        $entity->setUpdatedAt(new \DateTime());
    }

    /** @PrePersist
     * @param TimestampableInterface $entity
     * @param LifecycleEventArgs $event
     * @throws Exception
     */
    public function prePersistHandler(TimestampableInterface $entity, LifecycleEventArgs $event)
    {
        $dateTime = new \DateTime();
        $entity->setUpdatedAt($dateTime)
               ->setCreatedAt($dateTime)
        ;
    }
}