<?php

namespace Phpnarr\AskPhp\Intent\Amazon;

use Phpnarr\AskPhp\Intent\IntentInterface;

/**
 * Class ResumeIntent
 *
 * @package Phpnarr\AskPhp\Intent\Amazon
 */
class ResumeIntent implements IntentInterface
{
    public function getName()
    {
        return 'resume';
    }
}
