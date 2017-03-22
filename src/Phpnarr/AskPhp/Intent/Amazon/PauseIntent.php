<?php

namespace Phpnarr\AskPhp\Intent\Amazon;

use Phpnarr\AskPhp\Intent\IntentInterface;

/**
 * Class PauseIntent
 *
 * @package Phpnarr\AskPhp\Intent\Amazon
 */
class PauseIntent implements IntentInterface
{
    public function getName(): string
    {
        return 'pause';
    }
}
