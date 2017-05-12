<?php

namespace Phpnarr\AskPhp\Intent\Amazon;

use Phpnarr\AskPhp\Intent\AbstractIntent;
use Phpnarr\AskPhp\Intent\IntentInterface;

/**
 * Class HelpIntent
 *
 * @package Phpnarr\AskPhp\Intent\Amazon
 */
class HelpIntent extends AbstractIntent implements IntentInterface
{
    public function getName()
    {
        return 'help';
    }
}
