<?php

namespace Phpnarr\AskPhp\Intent;

use Phpnarr\AskPhp\Application;

/**
 * Interface IntentInterface
 *
 * @package Phpnarr\AskPhp\Intent
 */
interface IntentInterface
{
    /**
     * Returns the name of the intent
     *
     * @return string
     */
    public function getName();


    /**
     * @param Application $application
     *
     * @return mixed
     */
    public function setApplication(Application $application);
}
