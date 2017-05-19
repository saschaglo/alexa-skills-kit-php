<?php

namespace Phpnarr\AskPhp;

use Phpnarr\AskPhp\ServiceRequest\Context;
use Phpnarr\AskPhp\ServiceRequest\Request;
use Phpnarr\AskPhp\ServiceRequest\RequestEnvelope;
use Phpnarr\AskPhp\ServiceRequest\Session;

/**
 * Interface Input
 *
 * @package Phpnarr\AskPhp
 */
class Input implements InputInterface
{
    /**
     * @var RequestEnvelope
     */
    protected $envelope;

    /**
     * @var Session
     */
    protected $session;

    /**
     * @var Context
     */
    protected $context;

    /**
     * @var Request
     */
    protected $request;


    /**
     * Input constructor.
     *
     * @param RequestEnvelope $envelope
     */
    public function __construct(RequestEnvelope $envelope)
    {
        $this->envelope = $envelope;
        $this->session  = $envelope->getSession();
        $this->context  = $envelope->getContext();
        $this->request  = $envelope->getRequest();
    }


    /**
     * {@inheritdoc}
     */
    public function getEnvelope()
    {
        return $this->envelope;
    }


    /**
     * {@inheritdoc}
     */
    public function getSession()
    {
        return $this->session;
    }


    /**
     * {@inheritdoc}
     */
    public function getContext()
    {
        return $this->context;
    }


    /**
     * {@inheritdoc}
     */
    public function getRequest()
    {
        return $this->request;
    }
}
