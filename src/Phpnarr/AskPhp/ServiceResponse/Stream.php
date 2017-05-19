<?php

namespace Phpnarr\AskPhp\ServiceResponse;

/**
 * Class Stream
 *
 * @package Phpnarr\AskPhp\ServiceResponse
 */
class Stream
{
    /**
     * @var string
     */
    private $token;

    /**
     * @var string
     */
    private $url;

    /**
     * @var int
     */
    private $offsetInMilliseconds;


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
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }


    /**
     * @param string $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
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
}
