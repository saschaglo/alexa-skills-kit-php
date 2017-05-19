<?php

namespace Phpnarr\AskPhp\ServiceResponse;

/**
 * Class Directive
 *
 * @package Phpnarr\AskPhp\ServiceResponse
 */
class Directive
{
    /**
     * @var string
     */
    private $type;

    /**
     * @var string
     */
    private $playBehavior;

    /**
     * @var AudioItem
     */
    private $audioItem;


    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }


    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }


    /**
     * @return string
     */
    public function getPlayBehavior()
    {
        return $this->playBehavior;
    }


    /**
     * @param string $playBehavior
     */
    public function setPlayBehavior($playBehavior)
    {
        $this->playBehavior = $playBehavior;
    }


    /**
     * @return AudioItem
     */
    public function getAudioItem()
    {
        return $this->audioItem;
    }


    /**
     * @param AudioItem $audioItem
     */
    public function setAudioItem($audioItem)
    {
        $this->audioItem = $audioItem;
    }
}
