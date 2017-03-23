<?php

namespace Phpnarr\AskPhp\Intent\Amazon;

use Phpnarr\AskPhp\Intent\IntentInterface;

/**
 * Class RepeatIntent
 *
 * @package Phpnarr\AskPhp\Intent\Amazon
 */
class RepeatIntent implements IntentInterface
{
    public function getName()
    {
        return 'repeat';
    }
}
