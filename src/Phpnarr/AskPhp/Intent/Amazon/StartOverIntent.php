<?php

namespace Phpnarr\AskPhp\Intent\Amazon;

use Phpnarr\AskPhp\Intent\AbstractIntent;
use Phpnarr\AskPhp\Intent\IntentInterface;

/**
 * Class StartOverIntent
 *
 * @package Phpnarr\AskPhp\Intent\Amazon
 */
class StartOverIntent extends AbstractIntent implements IntentInterface
{
    public function getName()
    {
        return 'startOver';
    }
}
