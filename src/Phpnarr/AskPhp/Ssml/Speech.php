<?php

namespace Phpnarr\AskPhp\Ssml;

class Speech
{
    const SPEECH_PLAIN_TEXT = 'PlainText';
    const SPEECH_SSML = 'SSML';

    /**
     * @var string
     */
    protected $text;

    /**
     * @var string
     */
    protected $type = self::SPEECH_PLAIN_TEXT;


    /**
     * Speech constructor.
     *
     * @param string $text
     * @param string $type
     */
    public function __construct($text, $type = self::SPEECH_PLAIN_TEXT)
    {
        $this->text = $text;
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
     * {@inheritdoc}
     */
    function __toString()
    {
        return $this->text;
    }
}
