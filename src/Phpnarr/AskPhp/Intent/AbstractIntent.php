<?php

namespace Phpnarr\AskPhp\Intent;

use Phpnarr\AskPhp\Application;

class AbstractIntent
{
    /**
     * @var Application
     */
    protected $application;


    /**
     * @param Application $application
     */
    public function setApplication(Application $application)
    {
        $this->application = $application;
    }
}
