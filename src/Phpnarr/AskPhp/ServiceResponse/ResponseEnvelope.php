<?php

namespace Phpnarr\AskPhp\ServiceResponse;

use Phpnarr\AskPhp\AbstractEnvelope;
use Phpnarr\AskPhp\AttributeBag;

class ResponseEnvelope extends AbstractEnvelope
{
    const NODE_VERSION = 'version';
    const NODE_SESSION_ATTRIBUTES = 'sessionAttributes';
    const NODE_RESPONSE = 'response';

    /**
     * @var Version
     */
    private $version;

    /**
     * @var AttributeBag
     */
    private $sessionAttributes;

    /**
     * @var Response
     */
    private $response;


    /**
     * @return Version
     */
    public function getVersion()
    {
        return $this->version;
    }


    /**
     * @param Version $version
     */
    public function setVersion($version)
    {
        $this->version = $version;
    }


    /**
     * @return AttributeBag
     */
    public function getSessionAttributes()
    {
        return $this->sessionAttributes;
    }


    /**
     * @param AttributeBag $sessionAttributes
     */
    public function setSessionAttributes($sessionAttributes)
    {
        $this->sessionAttributes = $sessionAttributes;
    }


    /**
     * @return Response
     */
    public function getResponse()
    {
        return $this->response;
    }


    /**
     * @param Response $response
     */
    public function setResponse($response)
    {
        $this->response = $response;
    }
}
