<?php

namespace Phpnarr\AskPhp\Intent\Amazon;

use Phpnarr\AskPhp\Intent\AbstractIntent;
use Phpnarr\AskPhp\Intent\IntentInterface;

/**
 * Class ShuffleOnIntent
 *
 * @package Phpnarr\AskPhp\Intent\Amazon
 */
class ShuffleOnIntent extends AbstractIntent implements IntentInterface
{
    public function getName()
    {
        return 'shuffleOn';
    }
}
