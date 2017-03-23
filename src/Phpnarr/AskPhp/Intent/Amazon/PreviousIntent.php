<?php

namespace Phpnarr\AskPhp\Intent\Amazon;

use Phpnarr\AskPhp\Intent\IntentInterface;

/**
 * Class PreviousIntent
 *
 * @package Phpnarr\AskPhp\Intent\Amazon
 */
class PreviousIntent implements IntentInterface
{
    public function getName()
    {
        return 'previous';
    }
}
