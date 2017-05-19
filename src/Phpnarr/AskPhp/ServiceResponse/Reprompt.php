<?php

namespace Phpnarr\AskPhp\ServiceResponse;

/**
 * Class Reprompt
 *
 * @package Phpnarr\AskPhp\ServiceResponse
 */
class Reprompt implements \JsonSerializable
{
    /**
     * @var OutputSpeech
     */
    private $outputSpeech;


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
     * @return array|\stdClass
     */
    function jsonSerialize()
    {
        if ($this->getOutputSpeech() instanceof OutputSpeech) {
            return [
                'outputSpeech' => $this->getOutputSpeech()
            ];
        }

        return new \stdClass();
    }
}
