<?php

namespace Phpnarr\AskPhp\Intent\Amazon;

use Phpnarr\AskPhp\Intent\IntentInterface;

/**
 * Class NextIntent
 *
 * @package Phpnarr\AskPhp\Intent\Amazon
 */
class NextIntent implements IntentInterface
{
    public function getName()
    {
        return 'next';
    }
}
