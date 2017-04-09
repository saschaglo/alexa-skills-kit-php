<?php

namespace Phpnarr\AskPhp\ServiceRequest;

class Application
{
    /**
     * @var string
     */
    private $applicationId;


    /**
     * @return string
     */
    public function getApplicationId()
    {
        return $this->applicationId;
    }


    /**
     * @param string $applicationId
     */
    public function setApplicationId($applicationId)
    {
        $this->applicationId = $applicationId;
    }
}
