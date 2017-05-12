<?php

namespace Phpnarr\AskPhp;

use Phpnarr\AskPhp\Intent\IntentInterface;
use Phpnarr\AskPhp\ServiceRequest\RequestEnvelope;
use Phpnarr\AskPhp\ServiceResponse\ResponseEnvelope;

/**
 * Class Application
 *
 * @package Phpnarr\AskPhp
 */
class Application
{
    /**
     * @var IntentInterface
     */
    protected $intents = [];


    /**
     * @param IntentInterface $intent
     */
    public function addIntent(IntentInterface $intent)
    {
        $intent->setApplication($this);

        $this->intents[$intent->getName()] = $intent;
    }


    /**
     * @param IntentInterface[] $intents
     */
    public function addIntents(array $intents)
    {
        foreach ($intents as $intent) {
            $this->addIntent($intent);
        }
    }


    /**
     * @param RequestEnvelope|null $requestEnvelope
     *
     * @return ResponseEnvelope
     */
    public function handle(RequestEnvelope $requestEnvelope = null)
    {
        if (null === $requestEnvelope) {
            $interceptor     = new RequestInterceptor();
            $requestEnvelope = $interceptor->handle(RequestInterceptor::receiveInput());
        }

        // todo do sth with $requestEnvelope, parse intents and fill response

        return new ResponseEnvelope();
    }
}
