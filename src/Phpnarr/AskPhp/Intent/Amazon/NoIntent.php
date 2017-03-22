<?php

namespace Phpnarr\AskPhp\Intent\Amazon;

use Phpnarr\AskPhp\Intent\IntentInterface;

/**
 * Class NoIntent
 *
 * @package Phpnarr\AskPhp\Intent\Amazon
 */
class NoIntent implements IntentInterface
{
    public function getName(): string
    {
        return 'no';
    }
}
