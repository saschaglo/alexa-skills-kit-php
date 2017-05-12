<?php

namespace Phpnarr\AskPhp\ServiceRequest;

/**
 * Class AudioPlayer
 *
 * @package Phpnarr\AskPhp\ServiceRequest
 */
class AudioPlayer
{
    /**
     * @var string
     */
    private $token;

    /**
     * @var int
     */
    private $offsetInMilliseconds;

    /**
     * @var string
     */
    private $playerActivity;


    /**
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }


    /**
     * @param string $token
     */
    public function setToken($token)
    {
        $this->token = $token;
    }


    /**
     * @return int
     */
    public function getOffsetInMilliseconds()
    {
        return $this->offsetInMilliseconds;
    }


    /**
     * @param int $offsetInMilliseconds
     */
    public function setOffsetInMilliseconds($offsetInMilliseconds)
    {
        $this->offsetInMilliseconds = $offsetInMilliseconds;
    }


    /**
     * @return string
     */
    public function getPlayerActivity()
    {
        return $this->playerActivity;
    }


    /**
     * @param string $playerActivity
     */
    public function setPlayerActivity($playerActivity)
    {
        $this->playerActivity = $playerActivity;
    }
}
