<?php

namespace Phpnarr\AskPhp;

use Phpnarr\AskPhp\ServiceResponse\Card;
use Phpnarr\AskPhp\Ssml\Speech;

/**
 * Interface Output
 *
 * @package Phpnarr\AskPhp\Output
 */
class Output implements OutputInterface
{
    /**
     * @var Speech
     */
    protected $speakSpeech;

    /**
     * @var Speech
     */
    protected $repromptSpeech;

    /**
     * @var Card
     */
    protected $card;

    /**
     * @var AttributeBag
     */
    protected $attributes;

    /**
     * @var bool
     */
    protected $endSession = false;


    /**
     * Output constructor.
     *
     * @param AttributeBag $attributes
     */
    public function __construct(AttributeBag $attributes)
    {
        $this->attributes = $attributes;
    }


    /**
     * {@inheritdoc}
     */
    public function speak($text, $type = Speech::SPEECH_PLAIN_TEXT)
    {
        return $this->speakSpeech = new Speech($text, $type);
    }


    /**
     * {@inheritdoc}
     */
    public function reprompt($text, $type = Speech::SPEECH_PLAIN_TEXT)
    {
        return $this->repromptSpeech = new Speech($text, $type);
    }


    /**
     * {@inheritdoc}
     */
    public function setCard(Card $card = null)
    {
        return $this->card = $card;
    }


    /**
     * {@inheritdoc}
     */
    public function getCard()
    {
        return $this->card;
    }


    /**
     * {@inheritdoc}
     */
    public function getSpeakSpeech()
    {
        return $this->speakSpeech;
    }


    /**
     * {@inheritdoc}
     */
    public function getRepromptSpeech()
    {
        return $this->repromptSpeech;
    }


    /**
     * {@inheritdoc}
     */
    public function getAttributes()
    {
        return $this->attributes;
    }


    /**
     * {@inheritdoc}
     */
    public function setAttribute($name, $value)
    {
        $this->attributes[$name] = $value;
    }


    /**
     * {@inheritdoc}
     */
    public function removeAttribute($name)
    {
        unset($this->attributes[$name]);
    }


    /**
     * {@inheritdoc}
     */
    public function clearAttributes()
    {
        $this->attributes = new AttributeBag();
    }

    /**
     * {@inheritdoc}
     */
    public function end($confirm = true)
    {
        $this->endSession = $confirm;
    }

    /**
     * {@inheritdoc}
     */
    public function endSession()
    {
        return $this->endSession;
    }
}
