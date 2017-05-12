<?php

namespace Phpnarr\AskPhp\Intent\Amazon;

use Phpnarr\AskPhp\Intent\AbstractIntent;
use Phpnarr\AskPhp\Intent\IntentInterface;

/**
 * Class PreviousIntent
 *
 * @package Phpnarr\AskPhp\Intent\Amazon
 */
class PreviousIntent extends AbstractIntent implements IntentInterface
{
    public function getName()
    {
        return 'previous';
    }
}
