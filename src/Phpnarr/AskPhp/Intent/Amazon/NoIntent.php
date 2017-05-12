<?php

namespace Phpnarr\AskPhp\Intent\Amazon;

use Phpnarr\AskPhp\Intent\AbstractIntent;
use Phpnarr\AskPhp\Intent\IntentInterface;

/**
 * Class NoIntent
 *
 * @package Phpnarr\AskPhp\Intent\Amazon
 */
class NoIntent extends AbstractIntent implements IntentInterface
{
    public function getName()
    {
        return 'no';
    }
}
