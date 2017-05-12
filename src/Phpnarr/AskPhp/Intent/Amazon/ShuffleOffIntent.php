<?php

namespace Phpnarr\AskPhp\Intent\Amazon;

use Phpnarr\AskPhp\Intent\AbstractIntent;
use Phpnarr\AskPhp\Intent\IntentInterface;

/**
 * Class ShuffleOffIntent
 *
 * @package Phpnarr\AskPhp\Intent\Amazon
 */
class ShuffleOffIntent extends AbstractIntent implements IntentInterface
{
    public function getName()
    {
        return 'shuffleOff';
    }
}
