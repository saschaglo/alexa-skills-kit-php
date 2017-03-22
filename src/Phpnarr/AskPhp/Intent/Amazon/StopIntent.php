<?php

namespace Phpnarr\AskPhp\Intent\Amazon;

use Phpnarr\AskPhp\Intent\IntentInterface;

/**
 * Class StopIntent
 *
 * @package Phpnarr\AskPhp\Intent\Amazon
 */
class StopIntent implements IntentInterface
{
    public function getName(): string
    {
        return 'stop';
    }
}
