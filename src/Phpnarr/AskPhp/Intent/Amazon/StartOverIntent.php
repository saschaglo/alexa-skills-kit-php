<?php

namespace Phpnarr\AskPhp\Intent\Amazon;

use Phpnarr\AskPhp\Intent\IntentInterface;

/**
 * Class StartOverIntent
 *
 * @package Phpnarr\AskPhp\Intent\Amazon
 */
class StartOverIntent implements IntentInterface
{
    public function getName(): string
    {
        return 'startOver';
    }
}
