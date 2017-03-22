<?php

namespace Phpnarr\AskPhp\ServiceRequest;

/**
 * Class RequestEnvelope
 *
 * @package Phpnarr\AskPhp\ServiceRequest
 */
class RequestEnvelope
{
    /**
     * @var string
     */
    private $version;

    /**
     * @var Session
     */
    private $session;

    /**
     * @var Context
     */
    private $context;

    /**
     * @var Request
     */
    private $request;


    /**
     * @return string
     */
    public function getVersion(): string
    {
        return $this->version;
    }


    /**
     * @param string $version
     */
    public function setVersion(string $version)
    {
        $this->version = $version;
    }


    /**
     * @return Session
     */
    public function getSession(): Session
    {
        return $this->session;
    }


    /**
     * @param Session $session
     */
    public function setSession(Session $session)
    {
        $this->session = $session;
    }


    /**
     * @return Context
     */
    public function getContext(): Context
    {
        return $this->context;
    }


    /**
     * @param Context $context
     */
    public function setContext(Context $context)
    {
        $this->context = $context;
    }


    /**
     * @return Request
     */
    public function getRequest(): Request
    {
        return $this->request;
    }


    /**
     * @param Request $request
     */
    public function setRequest(Request $request)
    {
        $this->request = $request;
    }
}
