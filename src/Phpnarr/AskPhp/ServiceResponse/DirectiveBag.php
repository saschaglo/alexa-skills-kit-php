<?php

namespace Phpnarr\AskPhp\ServiceResponse;

use Phpnarr\AskPhp\AttributeBag;
use Phpnarr\AskPhp\Caster;

/**
 * Class DirectiveBag
 *
 * @package Phpnarr\AskPhp\ServiceResponse
 */
class DirectiveBag extends AttributeBag
{
    /**
     * {@inheritdoc}
     */
    protected function modifyAttribute($value)
    {
        return Caster::castObject(new Directive(), $value);
    }
}
