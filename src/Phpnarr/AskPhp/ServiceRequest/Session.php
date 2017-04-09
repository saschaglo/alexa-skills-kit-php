<?php

namespace Phpnarr\AskPhp\ServiceRequest;

class Session
{
    /**
     * @var string
     */
    private $sessionId;

    /**
     * @var Application
     */
    private $application;

    /**
     * @var AttributeBag
     */
    private $attributes;

    /**
     * @var User
     */
    private $user;

    /**
     * @var bool
     */
    private $new;


    /**
     * @return string
     */
    public function getSessionId()
    {
        return $this->sessionId;
    }


    /**
     * @param string $sessionId
     */
    public function setSessionId($sessionId)
    {
        $this->sessionId = $sessionId;
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
     * @return AttributeBag
     */
    public function getAttributes()
    {
        return $this->attributes;
    }


    /**
     * @param AttributeBag $attributes
     */
    public function setAttributes(AttributeBag $attributes)
    {
        $this->attributes = $attributes;
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
     * @return bool
     */
    public function isNew()
    {
        return $this->new;
    }


    /**
     * @param bool $new
     */
    public function setNew($new)
    {
        $this->new = $new;
    }
}
