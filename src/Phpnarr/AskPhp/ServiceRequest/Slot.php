<?php

namespace Phpnarr\AskPhp\ServiceRequest;

/**
 * Class Slot
 *
 * @package Phpnarr\AskPhp\ServiceRequest
 */
class Slot
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $value;


    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }


    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }


    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }


    /**
     * @param string $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }
}
