<?php

namespace Phpnarr\AskPhp;

/**
 * Class Caster
 *
 * Capable of transforming (mapping) array data to a given object instance.
 *
 * @package Phpnarr\AskPhp
 */
class Caster
{
    /**
     * @param object $object the object to be mapped
     * @param array  $data   the data as array which should be mapped to the object
     *
     * @return mixed
     */
    public static function castObject($object, $data)
    {
        if (!$object instanceof AttributeBag) {
            $objectProperties = array_map(
                function ($item) {
                    /** @var \ReflectionProperty $item */
                    return $item->getName();
                },
                (new \ReflectionObject($object))->getProperties()
            );
        } else {
            $objectProperties = array_keys($data);
        }

        foreach ($objectProperties as $objectProperty) {
            $propertyName     = $objectProperty;
            $setterMethodName = 'set' . str_replace(' ', '', ucwords(strtr($propertyName, '_-', '  ')));

            if (is_callable([$object, $setterMethodName])
                && array_key_exists($objectProperty, $data)
            ) {
                if (is_array($data[$objectProperty])
                    && $object instanceof ProducibleObjectInterface
                    && array_key_exists($objectProperty, $object->getMappings())
                ) {
                    $mappings = $object->getMappings();

                    call_user_func(
                        [$object, $setterMethodName],
                        self::castObject(
                            new $mappings[$objectProperty],
                            $data[$objectProperty]
                        )
                    );
                } else {
                    call_user_func(
                        [$object, $setterMethodName],
                        $data[$objectProperty]
                    );
                }
            }
        }

        return $object;
    }
}
