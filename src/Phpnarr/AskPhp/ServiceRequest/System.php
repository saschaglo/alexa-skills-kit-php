<?php

namespace Phpnarr\AskPhp\ServiceRequest;

use Phpnarr\AskPhp\ProducibleObjectInterface;

/**
 * Class System
 *
 * @package Phpnarr\AskPhp\ServiceRequest
 */
class System implements ProducibleObjectInterface
{
    /**
     * @var Application
     */
    private $application;

    /**
     * @var User
     */
    private $user;

    /**
     * @var Device
     */
    private $device;

    /**
     * @var string
     */
    private $apiEndpoint;


    /**
     * {@inheritdoc}
     */
    public function getMappings()
    {
        return [
            'application' => 'Phpnarr\AskPhp\ServiceRequest\Application',
            'user'        => 'Phpnarr\AskPhp\ServiceRequest\User',
            'device'      => 'Phpnarr\AskPhp\ServiceRequest\Device',
        ];
    }


    /**
     * @return Application
     */
    public function getApplication()
    {
        return $this->application;
    }


    /**
     * @param Application $application
     */
    public function setApplication($application)
    {
        $this->application = $application;
    }


    /**
     * @return User
     */
    public function getUser()
    {
        return $this->user;
    }


    /**
     * @param User $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }


    /**
     * @return Device
     */
    public function getDevice()
    {
        return $this->device;
    }


    /**
     * @param Device $device
     */
    public function setDevice($device)
    {
        $this->device = $device;
    }


    /**
     * @return string
     */
    public function getApiEndpoint()
    {
        return $this->apiEndpoint;
    }


    /**
     * @param string $apiEndpoint
     */
    public function setApiEndpoint($apiEndpoint)
    {
        $this->apiEndpoint = $apiEndpoint;
    }
}
