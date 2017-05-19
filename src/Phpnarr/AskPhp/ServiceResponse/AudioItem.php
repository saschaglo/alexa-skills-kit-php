<?php

namespace Phpnarr\AskPhp\ServiceResponse;

/**
 * Class AudioItem
 *
 * @package Phpnarr\AskPhp\ServiceResponse
 */
class AudioItem
{
    /**
     * @var Stream
     */
    private $stream;


    /**
     * @return Stream
     */
    public function getStream()
    {
        return $this->stream;
    }


    /**
     * @param Stream $stream
     */
    public function setStream($stream)
    {
        $this->stream = $stream;
    }
}
