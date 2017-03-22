<?php

namespace Phpnarr\AskPhp\Intent\Amazon;

use Phpnarr\AskPhp\Intent\IntentInterface;

/**
 * Class ShuffleOffIntent
 *
 * @package Phpnarr\AskPhp\Intent\Amazon
 */
class ShuffleOffIntent implements IntentInterface
{
    public function getName(): string
    {
        return 'shuffleOff';
    }
}
