<?php

namespace Phpnarr\AskPhp;

/**
 * Class AttributeBag
 *
 * @package Phpnarr\AskPhp\ServiceRequest
 */
class AttributeBag implements \IteratorAggregate, \Countable, \ArrayAccess, \Serializable
{
    /**
     * Values storage
     *
     * @var array
     */
    protected $values = [];


    /**
     * Returns the values untouched.
     *
     * @return array An array of values
     */
    public function all()
    {
        return $this->values;
    }


    /**
     * Returns the value keys.
     *
     * @return array An array of value keys
     */
    public function keys()
    {
        return array_keys($this->values);
    }


    /**
     * Replaces the current values by a new set.
     *
     * @param array $values An array of values
     *
     * @return self
     */
    public function replace(array $values = [])
    {
        $this->values = [];

        foreach ($values as $valueKey => $value) {
            $this->values[$valueKey] = $this->modifyAttribute($value);
        }

        return $this;
    }


    /**
     * Gets a value by name.
     *
     * @param string $key The key
     *
     * @return mixed|null
     */
    public function get($key)
    {
        if (!array_key_exists($key, $this->values)) {
            return null;
        }

        return $this->values[$key];
    }


    /**
     * Sets a value by name.
     *
     * @param string $key   The key
     * @param mixed  $value The value
     *
     * @return self
     */
    public function set($key, $value)
    {
        $this->values[$key] = $this->modifyAttribute($value);

        return $this;
    }


    /**
     * Returns true if the value is defined.
     *
     * @param string $key The key
     *
     * @return bool true if the value exists, false otherwise
     */
    public function has($key)
    {
        return array_key_exists($key, $this->values);
    }


    /**
     * Removes a value.
     *
     * @param string $key The key
     *
     * @return self
     */
    public function remove($key)
    {
        unset($this->values[$key]);

        return $this;
    }


    /**
     * Returns an iterator for values.
     *
     * @return \ArrayIterator An \ArrayIterator instance
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->values);
    }


    /**
     * Returns the number of values.
     *
     * @return int The number of values
     */
    public function count()
    {
        return count($this->values);
    }


    /**
     * Returns true if the named value exists.
     *
     * @param string $key The key
     *
     * @return bool true if the value exists, false otherwise
     */
    public function offsetExists($key)
    {
        return $this->has($key);
    }


    /**
     * Gets the value associated to a key.
     *
     * @param string $key The key
     *
     * @return mixed The associated value
     */
    public function offsetGet($key)
    {
        return $this->get($key);
    }


    /**
     * Sets the value.
     *
     * @param string $key   The key
     * @param mixed  $value The value
     */
    public function offsetSet($key, $value)
    {
        $this->set($key, $value);
    }


    /**
     * Removes a value
     *
     * @param string $key The key
     */
    public function offsetUnset($key)
    {
        $this->remove($key);
    }


    /**
     * {@inheritdoc}
     */
    public function serialize()
    {
        return serialize($this->values);
    }


    /**
     * {@inheritdoc}
     */
    public function unserialize($serialized)
    {
        $this->values = (array) unserialize((string) $serialized);
    }


    /**
     * Returns the values as array
     *
     * @return array
     */
    public function asArray()
    {
        return $this->all();
    }


    /**
     * Modifies a given attribute
     *
     * @param mixed $value
     *
     * @return array The normalized values
     */
    protected function modifyAttribute($value)
    {
        return $value;
    }


    /**
     * Returns the name of an attribute
     *
     * @param string $name
     *
     * @return string
     */
    protected function getAttributeKey($name)
    {
        return lcfirst($name);
    }


    /**
     * @param string $name
     * @param mixed  $arguments
     *
     * @return mixed
     */
    public function __call($name, $arguments)
    {
        $prefix = strtolower(substr($name, 0, 3));
        $name   = $this->getAttributeKey(substr($name, 3));

        if ('set' === $prefix && count($arguments) === 1) {
            return call_user_func([$this, 'set'], $name, $arguments[0]);
        } elseif ('get' === $prefix && !count($arguments)) {
            return call_user_func([$this, 'get'], $name);
        }

        return null;
    }
}
