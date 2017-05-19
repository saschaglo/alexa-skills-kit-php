<?php

namespace Phpnarr\AskPhp;

use Phpnarr\AskPhp\Intent\DirectiveAwareIntentInterface;
use Phpnarr\AskPhp\ServiceRequest\RequestEnvelope;
use Phpnarr\AskPhp\ServiceResponse\Card;
use Phpnarr\AskPhp\ServiceResponse\OutputSpeech;
use Phpnarr\AskPhp\ServiceResponse\Reprompt;
use Phpnarr\AskPhp\ServiceResponse\Version;
use Phpnarr\AskPhp\ServiceResponse\ResponseEnvelope;
use Phpnarr\AskPhp\ServiceResponse\Response as ChildResponse;
use Phpnarr\AskPhp\Ssml\Speech;

/**
 * Class Response
 *
 * @package Phpnarr\AskPhp
 */
class Response
{
    /**
     * @var Application
     */
    protected $application;

    /**
     * @var RequestEnvelope
     */
    protected $requestEnvelope;

    /**
     * @var OutputInterface
     */
    protected $output;


    /**
     * Response constructor.
     *
     * @param Application     $application
     * @param RequestEnvelope $requestEnvelope
     * @param OutputInterface $output
     */
    public function __construct(Application $application, RequestEnvelope $requestEnvelope, OutputInterface $output)
    {
        $this->application     = $application;
        $this->requestEnvelope = $requestEnvelope;
        $this->output          = $output;
    }


    /**
     * @return ResponseEnvelope
     */
    public function generateEnvelope()
    {
        $responseEnvelope = new ResponseEnvelope();

        $version = new Version();
        $version->setVersion($this->application->getVersion());
        $responseEnvelope->setVersion($version);

        $responseEnvelope->setSessionAttributes($this->output->getAttributes());

        $response = new ChildResponse();
        if ($this->output->getCard() instanceof Card) {
            $response->setCard($this->output->getCard());
        }

        $handledIntent = $this->application->getHandledIntent();
        if ($handledIntent instanceof DirectiveAwareIntentInterface) {
            $response->setDirectives($handledIntent->getDirectives());
        }

        if ($this->output->getSpeakSpeech() instanceof Speech) {
            $outputSpeech = new OutputSpeech();
            $outputSpeech->setType($this->output->getSpeakSpeech()->getType());

            if ($this->output->getSpeakSpeech()->getType() === Speech::SPEECH_PLAIN_TEXT) {
                $outputSpeech->setText($this->output->getSpeakSpeech()->getText());
            } else {
                $outputSpeech->setSsml($this->output->getSpeakSpeech()->getText());
            }
            $response->setOutputSpeech($outputSpeech);
        }

        if ($this->output->getRepromptSpeech() instanceof Speech) {
            $outputSpeech = new OutputSpeech();
            $outputSpeech->setType($this->output->getRepromptSpeech()->getType());

            if ($this->output->getRepromptSpeech()->getType() === Speech::SPEECH_PLAIN_TEXT) {
                $outputSpeech->setText($this->output->getRepromptSpeech()->getText());
            } else {
                $outputSpeech->setSsml($this->output->getRepromptSpeech()->getText());
            }
            $reprompt = new Reprompt();
            $reprompt->setOutputSpeech($outputSpeech);
            $response->setRepromt($reprompt);
        }

        $response->setShouldEndSession($this->output->endSession());

        $responseEnvelope->setResponse($response);

        return $responseEnvelope;
    }
}
