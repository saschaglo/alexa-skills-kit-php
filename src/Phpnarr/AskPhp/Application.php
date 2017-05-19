<?php

namespace Phpnarr\AskPhp;

use Phpnarr\AskPhp\Exception\GeneralException;
use Phpnarr\AskPhp\Intent\IntentInterface;
use Phpnarr\AskPhp\ServiceRequest\RequestEnvelope;

/**
 * Class Application
 *
 * @package Phpnarr\AskPhp
 */
class Application
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $version;

    /**
     * @var IntentInterface[]
     */
    protected $intents = [];

    /**
     * @var IntentInterface|null
     */
    protected $handledIntent;


    /**
     * Application constructor.
     *
     * @param string $name
     * @param string $version
     */
    public function __construct($name, $version = '1.0')
    {
        $this->name    = $name;
        $this->version = $version;
    }


    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }


    /**
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }


    /**
     * @param IntentInterface $intent
     *
     * @throws GeneralException if an intent with the same name already exists
     */
    public function addIntent(IntentInterface $intent)
    {
        $intent->setApplication($this);

        if (isset($this->intents[$intent->getName()])) {
            throw new GeneralException(sprintf('An intent with name "%s" already exists.', $intent->getName()));
        }

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
     * @return Response
     */
    public function handle(RequestEnvelope $requestEnvelope = null)
    {
        if (null === $requestEnvelope) {
            $interceptor     = new Interceptor();
            $requestEnvelope = $interceptor->handle(Interceptor::receiveInput());
        }

        $output = $this->handleIntent($requestEnvelope);

        return new Response($this, $requestEnvelope, $output);
    }


    /**
     * @param RequestEnvelope $requestEnvelope
     *
     * @return OutputInterface
     *
     * @throws GeneralException if intent with given name is not registered
     */
    protected function handleIntent(RequestEnvelope $requestEnvelope)
    {
        $input  = new Input($requestEnvelope);
        $output = new Output($requestEnvelope->getSession()->getAttributes());

        if (!isset($this->intents[$requestEnvelope->getRequest()->getIntent()->getName()])) {
            throw new GeneralException(
                sprintf('No intent with name "%s" found.', $requestEnvelope->getRequest()->getIntent()->getName())
            );
        }

        $intent              = $this->intents[$requestEnvelope->getRequest()->getIntent()->getName()];
        $this->handledIntent = $intent;

        $intent->execute($input, $output);

        return $output;
    }


    /**
     * @return IntentInterface
     *
     * @throws GeneralException if intent was not yet handled
     */
    public function getHandledIntent()
    {
        if (null === $this->handledIntent) {
            throw new GeneralException('Intent was not handled yet.');
        }

        return $this->handledIntent;
    }
}
