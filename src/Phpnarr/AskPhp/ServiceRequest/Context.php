<?php

namespace Phpnarr\AskPhp\ServiceRequest;

/**
 * Class Context
 *
 * @package Phpnarr\AskPhp\ServiceRequest
 */
class Context implements ProducibleObjectInterface
{
    /**
     * @var System
     */
    private $system;

    /**
     * @var AudioPlayer
     */
    private $audioPlayer;


    /**
     * {@inheritdoc}
     */
    public function getMappings()
    {
        return [
            'system'      => 'Phpnarr\AskPhp\ServiceRequest\System',
            'audioPlayer' => 'Phpnarr\AskPhp\ServiceRequest\AudioPlayer'
        ];
    }


    /**
     * @return System
     */
    public function getSystem()
    {
        return $this->system;
    }


    /**
     * @param System $system
     */
    public function setSystem($system)
    {
        $this->system = $system;
    }


    /**
     * @return AudioPlayer
     */
    public function getAudioPlayer()
    {
        return $this->audioPlayer;
    }


    /**
     * @param AudioPlayer $audioPlayer
     */
    public function setAudioPlayer($audioPlayer)
    {
        $this->audioPlayer = $audioPlayer;
    }
}
