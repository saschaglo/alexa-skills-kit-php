<?php

namespace Phpnarr\AskPhp\Intent;

use Phpnarr\AskPhp\Application;
use Phpnarr\AskPhp\InputInterface;
use Phpnarr\AskPhp\OutputInterface;

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


    /**
     * @param InputInterface  $input
     * @param OutputInterface $output
     *
     * @return mixed
     */
    public function execute(InputInterface $input, OutputInterface $output);
}
