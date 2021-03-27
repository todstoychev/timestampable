<?php

namespace Todstoychev\TimestampableBundle\Entity;

use DateTimeInterface;
use Doctrine\ORM\Mapping as ORM;

/**
 * Timestampable
 *
 * @package Todstoychev\TimestampableBundle\Entity
 * @author Todor Todorov <todstoychev@gmail.com>
 **/
trait Timestampable
{
    /**
     * @ORM\Column(type="datetime")
     * @var \DateTime
     */
    protected $createdAt;

    /**
     * @ORM\Column(type="datetime")
     * @var \DateTime
     */
    protected $updatedAt;

    /**
     * @param DateTimeInterface $createdAt
     *
     * @return TimestampableInterface
     */
    public function setCreatedAt(DateTimeInterface $createdAt): TimestampableInterface
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt(): ?DateTimeInterface
    {
        return $this->createdAt;
    }

    /**
     * @param DateTimeInterface $updatedAt
     *
     * @return TimestampableInterface
     */
    public function setUpdatedAt(DateTimeInterface $updatedAt): TimestampableInterface
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getUpdatedAt(): ?DateTimeInterface
    {
        return $this->updatedAt;
    }
}