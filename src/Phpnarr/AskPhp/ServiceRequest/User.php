<?php

namespace Phpnarr\AskPhp\ServiceRequest;

class User
{
    /**
     * @var string
     */
    private $userId;


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
}
