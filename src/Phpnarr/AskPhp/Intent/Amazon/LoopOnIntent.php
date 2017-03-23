<?php

namespace Phpnarr\AskPhp\Intent\Amazon;

use Phpnarr\AskPhp\Intent\IntentInterface;

/**
 * Class LoopOnIntent
 *
 * @package Phpnarr\AskPhp\Intent\Amazon
 */
class LoopOnIntent implements IntentInterface
{
    public function getName()
    {
        return 'loopOn';
    }
}
