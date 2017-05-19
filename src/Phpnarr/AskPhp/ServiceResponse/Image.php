<?php

namespace Phpnarr\AskPhp\ServiceResponse;

/**
 * Class Image
 *
 * @package Phpnarr\AskPhp\ServiceResponse
 */
class Image implements \JsonSerializable
{
    /**
     * @var string
     */
    private $smallImageUrl;

    /**
     * @var string
     */
    private $largeImageUrl;


    /**
     * @return string
     */
    public function getSmallImageUrl()
    {
        return $this->smallImageUrl;
    }


    /**
     * @param string $smallImageUrl
     */
    public function setSmallImageUrl($smallImageUrl)
    {
        $this->smallImageUrl = $smallImageUrl;
    }


    /**
     * @return string
     */
    public function getLargeImageUrl()
    {
        return $this->largeImageUrl;
    }


    /**
     * @param string $largeImageUrl
     */
    public function setLargeImageUrl($largeImageUrl)
    {
        $this->largeImageUrl = $largeImageUrl;
    }


    /**
     * @return array
     */
    function jsonSerialize()
    {
        $return = [];

        if ($this->getSmallImageUrl()) {
            $return['smallImageUrl'] = $this->getSmallImageUrl();
        }

        if ($this->getLargeImageUrl()) {
            $return['largeImageUrl'] = $this->getLargeImageUrl();
        }

        return $return;
    }
}
