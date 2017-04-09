<?php

namespace Phpnarr\AskPhp\ServiceRequest;

/**
 * Class Version
 *
 * @package Phpnarr\AskPhp\ServiceRequest
 */
class Version
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
}
