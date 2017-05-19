<?php

namespace Phpnarr\AskPhp\ServiceResponse;

/**
 * Class Version
 *
 * @package Phpnarr\AskPhp\ServiceResponse
 */
class Version implements \JsonSerializable
{
    /**
     * @var string
     */
    private $version;


    /**
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }


    /**
     * @param string $version
     */
    public function setVersion($version)
    {
        $this->version = $version;
    }


    /**
     * @return string
     */
    function jsonSerialize()
    {
        return $this->getVersion();
    }
}
