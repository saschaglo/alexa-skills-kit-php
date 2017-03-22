<?php

namespace Phpnarr\AskPhp\Intent\Amazon;

use Phpnarr\AskPhp\Intent\IntentInterface;

/**
 * Class HelpIntent
 *
 * @package Phpnarr\AskPhp\Intent\Amazon
 */
class HelpIntent implements IntentInterface
{
    public function getName(): string
    {
        return 'help';
    }
}
