<?php

namespace Phpnarr\AskPhp\ServiceResponse;

use Phpnarr\AskPhp\AttributeBag;

class ResponseEnvelope implements \JsonSerializable
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


    /**
     * @param bool $pretty
     */
    public function send($pretty = false)
    {
        if ($pretty) {
            echo json_encode($this, JSON_PRETTY_PRINT);
        } else {
            echo json_encode($this);
        }
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        return [
            'version'           => $this->getVersion(),
            'sessionAttributes' => $this->getSessionAttributes()->asObject(),
            'response'          => $this->getResponse()
        ];
    }
}
