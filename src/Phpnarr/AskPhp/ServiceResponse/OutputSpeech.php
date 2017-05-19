<?php

namespace Phpnarr\AskPhp\ServiceResponse;

use Phpnarr\AskPhp\Ssml\Speech;

/**
 * Class OutputSpeech
 *
 * @package Phpnarr\AskPhp\ServiceResponse
 */
class OutputSpeech implements \JsonSerializable
{
    /**
     * @var string
     */
    protected $type;

    /**
     * @var string
     */
    protected $text;

    /**
     * @var string
     */
    protected $ssml;


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
    public function getText()
    {
        return $this->text;
    }


    /**
     * @param string $text
     */
    public function setText($text)
    {
        $this->text = $text;
    }


    /**
     * @return string
     */
    public function getSsml()
    {
        return $this->ssml;
    }


    /**
     * @param string $ssml
     */
    public function setSsml($ssml)
    {
        $this->ssml = $ssml;
    }


    /**
     * @return array
     */
    function jsonSerialize()
    {
        $return = [
            'type' => $this->getType()
        ];

        if ($this->getType() === Speech::SPEECH_PLAIN_TEXT) {
            $return['text'] = $this->getText();
        } else {
            $return['ssml'] = $this->getSsml();
        }

        return $return;
    }
}
