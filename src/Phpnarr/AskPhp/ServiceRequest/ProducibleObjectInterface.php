<?php

namespace Phpnarr\AskPhp\ServiceRequest;

/**
 * Interface ProducibleObjectInterface
 *
 * Classes which implement this interface should provide an array with class paths
 * where key of each item corresponds to the key in the data array which should
 * map the assigned class instance.
 *
 * @package Phpnarr\AskPhp
 */
interface ProducibleObjectInterface
{
    /**
     * @return array
     */
    public function getMappings();
}