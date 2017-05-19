<?php

namespace Phpnarr\AskPhp\ServiceRequest;

use Phpnarr\AskPhp\AttributeBag;

/**
 * Class User
 *
 * @package Phpnarr\AskPhp\ServiceRequest
 */
class User implements ProducibleObjectInterface
{
    /**
     * @var string
     */
    private $userId;

    /**
     * @var AttributeBag
     */
    private $permissions;

    /**
     * @var string
     */
    private $accessToken;


    /**
     * {@inheritdoc}
     */
    public function getMappings()
    {
        return [
            'permissions' => 'Phpnarr\AskPhp\AttributeBag'
        ];
    }


    /**
     * @return string
     */
    public function getUserId()
    {
        return $this->userId;
    }


    /**
     * @param string $userId
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
    }


    /**
     * @return AttributeBag
     */
    public function getPermissions()
    {
        return $this->permissions;
    }


    /**
     * @param AttributeBag $permissions
     */
    public function setPermissions(AttributeBag $permissions)
    {
        $this->permissions = $permissions;
    }


    /**
     * @return string
     */
    public function getAccessToken()
    {
        return $this->accessToken;
    }


    /**
     * @param string $accessToken
     */
    public function setAccessToken($accessToken)
    {
        $this->accessToken = $accessToken;
    }
}
