<?php

namespace Phpnarr\AskPhp\ServiceRequest;

use Phpnarr\AskPhp\AbstractEnvelope;

/**
 * Class RequestEnvelope
 *
 * @package Phpnarr\AskPhp\ServiceRequest
 */
class RequestEnvelope extends AbstractEnvelope
{
    const NODE_VERSION = 'version';
    const NODE_SESSION = 'session';
    const NODE_CONTEXT = 'context';
    const NODE_REQUEST = 'request';

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
    public function getVersion()
    {
        return $this->version;
    }


    /**
     * @param string $version
     */
    public function setVersion($version)
    {
        $this->version = $version;
    }


    /**
     * @return Session
     */
    public function getSession()
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
    public function getContext()
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
    public function getRequest()
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
