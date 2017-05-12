<?php

namespace Phpnarr\AskPhp\ServiceRequest;

use Phpnarr\AskPhp\ProducibleObjectInterface;

/**
 * Class Request
 *
 * @package Phpnarr\AskPhp\ServiceRequest
 */
class Request implements ProducibleObjectInterface
{
    /**
     * @var string
     */
    private $type;

    /**
     * @var string
     */
    private $requestId;

    /**
     * @var string
     */
    private $locale;

    /**
     * @var string
     */
    private $timestamp;

    /**
     * @var Intent
     */
    private $intent;


    /**
     * {@inheritdoc}
     */
    public function getMappings()
    {
        return [
            'intent' => 'Phpnarr\AskPhp\ServiceRequest\Intent'
        ];
    }


    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }


    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }


    /**
     * @return string
     */
    public function getRequestId()
    {
        return $this->requestId;
    }


    /**
     * @param string $requestId
     */
    public function setRequestId($requestId)
    {
        $this->requestId = $requestId;
    }


    /**
     * @return string
     */
    public function getLocale()
    {
        return $this->locale;
    }


    /**
     * @param string $locale
     */
    public function setLocale($locale)
    {
        $this->locale = $locale;
    }


    /**
     * @return string
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }


    /**
     * @param string $timestamp
     */
    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;
    }


    /**
     * @return Intent
     */
    public function getIntent()
    {
        return $this->intent;
    }


    /**
     * @param Intent $intent
     */
    public function setIntent(Intent $intent)
    {
        $this->intent = $intent;
    }
}
