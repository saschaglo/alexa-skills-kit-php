<?php

namespace Phpnarr\AskPhp\Intent;

use Phpnarr\AskPhp\ServiceResponse\Directive;
use Phpnarr\AskPhp\ServiceResponse\DirectiveBag;

/**
 * Interface DirectiveAwareIntentInterface
 *
 * @package Phpnarr\AskPhp\Intent
 */
interface DirectiveAwareIntentInterface
{
    /**
     * Returns all defined directives as array
     *
     * @return DirectiveBag
     */
    public function getDirectives();


    /**
     * Adds a new directive to the intents' directive bag
     *
     * @param Directive $directive
     *
     * @return void
     */
    public function addDirective(Directive $directive);
}
