<?php

namespace Phpnarr\AskPhp\Intent\Amazon;

use Phpnarr\AskPhp\Intent\IntentInterface;

/**
 * Class LoopOffIntent
 *
 * @package Phpnarr\AskPhp\Intent\Amazon
 */
class LoopOffIntent implements IntentInterface
{
    public function getName()
    {
        return 'loopOff';
    }
}
