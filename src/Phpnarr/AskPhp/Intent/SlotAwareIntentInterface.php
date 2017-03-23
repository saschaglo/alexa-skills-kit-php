<?php

namespace Phpnarr\AskPhp\Intent;

use Phpnarr\AskPhp\ServiceRequest\Slot;

/**
 * Interface SlotAwareIntentInterface
 *
 * @package Phpnarr\AskPhp\Intent
 */
interface SlotAwareIntentInterface
{
    /**
     * Returns all defined slots as array
     *
     * @return Slot[]
     */
    public function getSlots();


    /**
     * Adds a new slot to the intent
     *
     * @param Slot $slot
     *
     * @return void
     */
    public function addSlot(Slot $slot);
}
