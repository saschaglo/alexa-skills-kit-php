<?php

namespace Phpnarr\AskPhp\ServiceRequest;

class Request
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
     * @var array
     */
    private $intent;


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
     * @return array
     */
    public function getIntent()
    {
        return $this->intent;
    }


    /**
     * @param array $intent
     */
    public function setIntent($intent)
    {
        $this->intent = $intent;
    }
}
