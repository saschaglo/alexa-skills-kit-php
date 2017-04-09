<?php

namespace Phpnarr\AskPhp;

class Caster
{
    public static function castObject($object, $data, array $mapping = [])
    {
        $reflectionObject = new \ReflectionObject($object);
        $objectProperties = $reflectionObject->getProperties();
        $objectMethods    = array_map(
            function ($item) {
                /** @var \ReflectionMethod $item */
                return $item->getName();
            },
            $reflectionObject->getMethods(\ReflectionMethod::IS_PUBLIC)
        );

        foreach ($objectProperties as $objectProperty) {
            $propertyName     = $objectProperty->getName();
            $setterMethodName = 'set' . str_replace(' ', '', ucwords(strtr($propertyName, '_-', '  ')));

            if (in_array($setterMethodName, $objectMethods)
                && is_callable([$object, $setterMethodName])
                && array_key_exists($objectProperty->getName(), $data)
            ) {

                if (is_array($data[$objectProperty->getName()])
                    && array_key_exists($objectProperty->getName(), $mapping)
                ) {
                    call_user_func(
                        [$object, $setterMethodName],
                        self::castObject(
                            new $mapping[$objectProperty->getName()],
                            $data[$objectProperty->getName()],
                            $mapping
                        )
                    );
                } else {
                    call_user_func(
                        [$object, $setterMethodName],
                        $data[$objectProperty->getName()]
                    );
                }
            }
        }

        return $object;
    }
}
