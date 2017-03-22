<?php

namespace Phpnarr\AskPhp\Intent\Amazon;

use Phpnarr\AskPhp\Intent\IntentInterface;

/**
 * Class YesIntent
 *
 * @package Phpnarr\AskPhp\Intent\Amazon
 */
class YesIntent implements IntentInterface
{
    public function getName(): string
    {
        return 'yes';
    }
}
