<?php

namespace Phpnarr\AskPhp\Intent;

use Phpnarr\AskPhp\Application;

/**
 * Class Intent
 *
 * @package Phpnarr\AskPhp\Intent
 */
abstract class Intent
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
