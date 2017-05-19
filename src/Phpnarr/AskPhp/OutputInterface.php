<?php

namespace Phpnarr\AskPhp;

use Phpnarr\AskPhp\ServiceResponse\Card;
use Phpnarr\AskPhp\Ssml\Speech;

/**
 * Interface OutputInterface
 *
 * @package Phpnarr\AskPhp
 */
interface OutputInterface
{
    /**
     * @param string $text
     * @param string $type
     *
     * @return Speech
     */
    public function speak($text, $type = Speech::SPEECH_PLAIN_TEXT);


    /**
     * @param        $text
     * @param string $type
     *
     * @return Speech
     */
    public function reprompt($text, $type = Speech::SPEECH_PLAIN_TEXT);


    /**
     * @param Card|null $card
     *
     * @return Card|null
     */
    public function setCard(Card $card = null);


    /**
     * @return Card|null
     */
    public function getCard();


    /**
     * @return Speech
     */
    public function getSpeakSpeech();


    /**
     * @return Speech
     */
    public function getRepromptSpeech();


    /**
     * @return AttributeBag
     */
    public function getAttributes();


    /**
     * @param string $name
     * @param object $value
     */
    public function setAttribute($name, $value);


    /**
     * @param string $name
     */
    public function removeAttribute($name);


    public function clearAttributes();


    /**
     * @param bool $confirm
     */
    public function end($confirm = true);


    /**
     * @return bool
     */
    public function endSession();
}
