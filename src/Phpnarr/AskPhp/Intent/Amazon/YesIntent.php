<?php

namespace Phpnarr\AskPhp\Intent\Amazon;

use Phpnarr\AskPhp\Intent\AbstractIntent;
use Phpnarr\AskPhp\Intent\IntentInterface;

/**
 * Class YesIntent
 *
 * @package Phpnarr\AskPhp\Intent\Amazon
 */
class YesIntent extends AbstractIntent implements IntentInterface
{
    public function getName()
    {
        return 'yes';
    }
}
