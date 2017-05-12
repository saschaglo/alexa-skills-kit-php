<?php

namespace Phpnarr\AskPhp\Intent\Amazon;

use Phpnarr\AskPhp\Intent\AbstractIntent;
use Phpnarr\AskPhp\Intent\IntentInterface;

/**
 * Class NextIntent
 *
 * @package Phpnarr\AskPhp\Intent\Amazon
 */
class NextIntent extends AbstractIntent implements IntentInterface
{
    public function getName()
    {
        return 'next';
    }
}
