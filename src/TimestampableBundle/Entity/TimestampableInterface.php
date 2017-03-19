<?php

namespace Todstoychev\TimestampableBundle\Entity;

/**
 * TimestampableInterface
 *
 * @package Todstoychev\TimestampableBundle\Entity
 * @author Todor Todorov <todstoychev@gmail.com>
 **/
interface TimestampableInterface
{
    /**
     * @return \DateTime
     */
    public function getCreatedAt();

    /**
     * @param \DateTime $createdAt
     *
     * @return TimestampableInterface
     */
    public function setCreatedAt(\DateTime $createdAt);

    /**
     * @return \DateTime
     */
    public function getUpdatedAt();

    /**
     * @param \DateTime $updatedAt
     *
     * @return TimestampableInterface
     */
    public function setUpdatedAt(\DateTime $updatedAt);
}