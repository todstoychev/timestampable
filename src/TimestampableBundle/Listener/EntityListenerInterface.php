<?php

namespace Todstoychev\TimestampableBundle\Listener;

use Doctrine\ORM\Event\PreUpdateEventArgs ;
use Doctrine\ORM\Event\{
    LifecycleEventArgs
};
use Doctrine\ORM\Mapping\{
    PrePersist, PreUpdate
};
use Todstoychev\TimestampableBundle\Entity\TimestampableInterface;

/**
 * EntityListenerInterface
 *
 * @package Todstoychev\TimestampableBundle\Listener
 * @author Todor Todorov <todstoychev@gmail.com>
 **/
interface EntityListenerInterface
{
    /** @PrePersist
     * @param TimestampableInterface $entity
     * @param LifecycleEventArgs $event
     */
    public function prePersistHandler(TimestampableInterface $entity, LifecycleEventArgs $event);

//    /** @PostPersist */
//    public function postPersistHandler(TimestampableInterface $entity, LifecycleEventArgs $event);

    /** @PreUpdate
     * @param TimestampableInterface $entity
     * @param PreUpdateEventArgs $event
     */
    public function preUpdateHandler(TimestampableInterface $entity, PreUpdateEventArgs $event);

//    /** @PostUpdate */
//    public function postUpdateHandler(TimestampableInterface $entity, LifecycleEventArgs $event);

//    /** @PostRemove */
//    public function postRemoveHandler(TimestampableInterface $entity, LifecycleEventArgs $event);

//    /** @PreRemove */
//    public function preRemoveHandler(TimestampableInterface $entity, LifecycleEventArgs $event);

//    /** @PreFlush */
//    public function preFlushHandler(TimestampableInterface $entity, PreFlushEventArgs $event);

//    /** @PostLoad */
//    public function postLoadHandler(TimestampableInterface $entity, LifecycleEventArgs $event);
}