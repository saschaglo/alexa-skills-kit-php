<?php

namespace Phpnarr\AskPhp\Intent;

use Phpnarr\AskPhp\ServiceResponse\Directive;

/**
 * Class Intent
 *
 * @package Phpnarr\AskPhp\Intent
 */
abstract class DirectiveAwareIntent extends Intent implements DirectiveAwareIntentInterface
{
    /**
     * @var Directive[]
     */
    protected $directives;


    /**
     * {@inheritdoc}
     */
    public function getDirectives()
    {
        return $this->directives;
    }


    /**
     * {@inheritdoc}
     */
    public function addDirective(Directive $directive)
    {
        $this->directives[$directive->getType()] = $directive;
    }

}
