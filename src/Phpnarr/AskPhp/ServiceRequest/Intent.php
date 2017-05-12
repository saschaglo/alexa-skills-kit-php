<?php

namespace Phpnarr\AskPhp\ServiceRequest;

use Phpnarr\AskPhp\ProducibleObjectInterface;

/**
 * Class Intent
 *
 * @package Phpnarr\AskPhp\ServiceRequest
 */
class Intent implements ProducibleObjectInterface
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var SlotBag
     */
    private $slots;


    /**
     * {@inheritdoc}
     */
    public function getMappings()
    {
        return [
            'slots' => 'Phpnarr\AskPhp\ServiceRequest\SlotBag'
        ];
    }


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
     * @return SlotBag
     */
    public function getSlots()
    {
        return $this->slots;
    }


    /**
     * @param SlotBag $slots
     */
    public function setSlots(SlotBag $slots)
    {
        $this->slots = $slots;
    }
}
