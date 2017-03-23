<?php

namespace Phpnarr\AskPhp\Intent\Amazon;

use Phpnarr\AskPhp\Intent\IntentInterface;

/**
 * Class CancelIntent
 *
 * @package Phpnarr\AskPhp\Intent\Amazon
 */
class CancelIntent implements IntentInterface
{
    public function getName()
    {
        return 'cancel';
    }
}
