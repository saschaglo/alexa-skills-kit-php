<?php

namespace Phpnarr\AskPhp\ServiceResponse;

/**
 * Class Response
 *
 * @package Phpnarr\AskPhp\ServiceResponse
 */
class Response implements \JsonSerializable
{
    /**
     * @var OutputSpeech
     */
    private $outputSpeech;

    /**
     * @var Card
     */
    private $card;

    /**
     * @var Reprompt
     */
    private $repromt;

    /**
     * @var DirectiveBag
     */
    private $directives;

    /**
     * @var bool
     */
    private $shouldEndSession;


    /**
     * @return OutputSpeech
     */
    public function getOutputSpeech()
    {
        return $this->outputSpeech;
    }


    /**
     * @param OutputSpeech $outputSpeech
     */
    public function setOutputSpeech($outputSpeech)
    {
        $this->outputSpeech = $outputSpeech;
    }


    /**
     * @return Card
     */
    public function getCard()
    {
        return $this->card;
    }


    /**
     * @param Card $card
     */
    public function setCard($card)
    {
        $this->card = $card;
    }


    /**
     * @return Reprompt
     */
    public function getRepromt()
    {
        return $this->repromt;
    }


    /**
     * @param Reprompt $repromt
     */
    public function setRepromt($repromt)
    {
        $this->repromt = $repromt;
    }


    /**
     * @return DirectiveBag
     */
    public function getDirectives()
    {
        return $this->directives;
    }


    /**
     * @param DirectiveBag $directives
     */
    public function setDirectives($directives)
    {
        $this->directives = $directives;
    }


    /**
     * @return bool
     */
    public function shouldEndSession()
    {
        return $this->shouldEndSession;
    }


    /**
     * @param bool $shouldEndSession
     */
    public function setShouldEndSession($shouldEndSession)
    {
        $this->shouldEndSession = $shouldEndSession;
    }


    /**
     * @return array
     */
    function jsonSerialize()
    {
        $return = [];

        if ($this->getOutputSpeech() instanceof OutputSpeech) {
            $return['outputSpeech'] = $this->getOutputSpeech();
        }

        if ($this->getCard() instanceof Card) {
            $return['card'] = $this->getCard();
        }

        if ($this->getRepromt() instanceof Reprompt) {
            $return['reprompt'] = $this->getRepromt();
        }

        if ($this->getDirectives() instanceof DirectiveBag) {
            $return['directives'] = $this->getDirectives()->asObject();
        }

        $return['shouldEndSession'] = $this->shouldEndSession();

        return $return;
    }
}
