<?php

namespace Todstoychev\TimestampableBundle\Entity;

/**
 * Timestampable
 *
 * @package Todstoychev\TimestampableBundle\Entity
 * @author Todor Todorov <todstoychev@gmail.com>
 **/
trait Timestampable
{
    /**
     * @var \DateTime
     */
    protected $createdAt;

    /**
     * @var \DateTime
     */
    protected $updatedAt;

    /**
     * @param \DateTime $createdAt
     *
     * @return TimestampableInterface
     */
    public function setCreatedAt(\DateTime $createdAt): TimestampableInterface
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }

    /**
     * @param \DateTime $updatedAt
     *
     * @return TimestampableInterface
     */
    public function setUpdatedAt(\DateTime $updatedAt): TimestampableInterface
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getUpdatedAt(): \DateTime
    {
        return $this->updatedAt;
    }
}