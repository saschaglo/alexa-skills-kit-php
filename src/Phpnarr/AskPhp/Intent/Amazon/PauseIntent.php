<?php

namespace Phpnarr\AskPhp\Intent\Amazon;

use Phpnarr\AskPhp\Intent\AbstractIntent;
use Phpnarr\AskPhp\Intent\IntentInterface;

/**
 * Class PauseIntent
 *
 * @package Phpnarr\AskPhp\Intent\Amazon
 */
class PauseIntent extends AbstractIntent implements IntentInterface
{
    public function getName()
    {
        return 'pause';
    }
}
