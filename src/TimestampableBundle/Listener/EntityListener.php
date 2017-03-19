<?php

namespace Todstoychev\TimestampableBundle\Listener;

use Doctrine\ORM\Event\LifecycleEventArgs;
use Doctrine\ORM\Event\PreUpdateEventArgs;
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
     */
    public function preUpdateHandler(TimestampableInterface $entity, PreUpdateEventArgs $event)
    {
        $entity->setUpdatedAt(new \DateTime());
    }

    /** @PrePersist
     * @param \Todstoychev\TimestampableBundle\Entity\TimestampableInterface $entity
     * @param \Doctrine\Common\Persistence\Event\LifecycleEventArgs $event
     */
    public function prePersistHandler(TimestampableInterface $entity, LifecycleEventArgs $event)
    {
        $dateTime = new \DateTime();
        $entity->setUpdatedAt($dateTime)
               ->setCreatedAt($dateTime)
        ;
    }
}