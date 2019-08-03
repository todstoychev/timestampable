<?php

namespace Todstoychev\TimestampableBundle\Entity;

use DateTime;
use DateTimeInterface;

/**
 * TimestampableInterface
 *
 * @package Todstoychev\TimestampableBundle\Entity
 * @author Todor Todorov <todstoychev@gmail.com>
 **/
interface TimestampableInterface
{
    /**
     * @return DateTimeInterface
     */
    public function getCreatedAt(): ?DateTimeInterface;

    /**
     * @param DateTimeInterface $createdAt
     *
     * @return TimestampableInterface
     */
    public function setCreatedAt(DateTimeInterface $createdAt);

    /**
     * @return DateTimeInterface
     */
    public function getUpdatedAt(): ?DateTimeInterface;

    /**
     * @param DateTimeInterface $updatedAt
     *
     * @return TimestampableInterface
     */
    public function setUpdatedAt(DateTimeInterface $updatedAt);
}