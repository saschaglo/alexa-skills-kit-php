<?php

namespace Phpnarr\AskPhp\ServiceRequest;

use Phpnarr\AskPhp\Caster;

/**
 * Class SlotBag
 *
 * @package Phpnarr\AskPhp\ServiceRequest
 */
class SlotBag extends AttributeBag
{
    /**
     * Returns the values as array
     *
     * @return array
     */
    public function asArray()
    {
        $values = [];

        /** @var Slot $slot */
        foreach ($this->all() as $slotKey => $slot) {
            $currentSlotReturn = ['name' => $slot->getName()];

            if (null !== ($value = $slot->getValue())) {
                $currentSlotReturn['value'] = $value;
            }

            $values[$slotKey] = $currentSlotReturn;
        }

        return $values;
    }


    /**
     * {@inheritdoc}
     */
    protected function modifyAttribute($value)
    {
        return Caster::castObject(new Slot(), $value);
    }


    /**
     * {@inheritdoc}
     */
    protected function getAttributeKey($name)
    {
        return $name;
    }
}
