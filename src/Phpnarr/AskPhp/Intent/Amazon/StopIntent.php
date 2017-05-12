<?php

namespace Phpnarr\AskPhp\Intent\Amazon;

use Phpnarr\AskPhp\Intent\AbstractIntent;
use Phpnarr\AskPhp\Intent\IntentInterface;

/**
 * Class StopIntent
 *
 * @package Phpnarr\AskPhp\Intent\Amazon
 */
class StopIntent extends AbstractIntent implements IntentInterface
{
    public function getName()
    {
        return 'stop';
    }
}
