<?php

namespace Phpnarr\AskPhp\Intent\Amazon;

use Phpnarr\AskPhp\Intent\IntentInterface;

/**
 * Class ShuffleOnIntent
 *
 * @package Phpnarr\AskPhp\Intent\Amazon
 */
class ShuffleOnIntent implements IntentInterface
{
    public function getName(): string
    {
        return 'shuffleOn';
    }
}
