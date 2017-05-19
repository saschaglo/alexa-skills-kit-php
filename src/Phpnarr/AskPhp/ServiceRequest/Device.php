<?php

namespace Phpnarr\AskPhp\ServiceRequest;

use Phpnarr\AskPhp\AttributeBag;

/**
 * Class Device
 *
 * @package Phpnarr\AskPhp\ServiceRequest
 */
class Device implements ProducibleObjectInterface
{
    /**
     * @var string
     */
    private $deviceId;

    /**
     * @var AttributeBag
     */
    private $supportedInterfaces;


    /**
     * {@inheritdoc}
     */
    public function getMappings()
    {
        return [
            'supportedInterfaces' => 'Phpnarr\AskPhp\AttributeBag'
        ];
    }


    /**
     * @return string
     */
    public function getDeviceId()
    {
        return $this->deviceId;
    }


    /**
     * @param string $deviceId
     */
    public function setDeviceId($deviceId)
    {
        $this->deviceId = $deviceId;
    }


    /**
     * @return AttributeBag
     */
    public function getSupportedInterfaces()
    {
        return $this->supportedInterfaces;
    }


    /**
     * @param AttributeBag $supportedInterfaces
     */
    public function setSupportedInterfaces(AttributeBag $supportedInterfaces)
    {
        $this->supportedInterfaces = $supportedInterfaces;
    }
}
