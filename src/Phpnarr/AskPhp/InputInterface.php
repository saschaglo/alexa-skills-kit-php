<?php

namespace Phpnarr\AskPhp;

use Phpnarr\AskPhp\ServiceRequest\Context;
use Phpnarr\AskPhp\ServiceRequest\Request;
use Phpnarr\AskPhp\ServiceRequest\RequestEnvelope;
use Phpnarr\AskPhp\ServiceRequest\Session;

/**
 * Interface InputInterface
 *
 * @package Phpnarr\AskPhp
 */
interface InputInterface
{
    /**
     * @return RequestEnvelope
     */
    public function getEnvelope();


    /**
     * @return Session
     */
    public function getSession();


    /**
     * @return Context
     */
    public function getContext();


    /**
     * @return Request
     */
    public function getRequest();
}
