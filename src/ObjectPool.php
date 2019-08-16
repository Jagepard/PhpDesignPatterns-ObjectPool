<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Creational\ObjectPool;

final class ObjectPool
{
    /**
     * @var array
     */
    private $pool = [];

    /**
     * @param string $name
     * @return CityInterface
     */
    public function getObject(string $name): CityInterface
    {
        if (array_key_exists($name, $this->pool)) {
            return $this->pool[$name];
        }

        throw new \InvalidArgumentException("Object $name does'nt exist");
    }

    /**
     * @param CityInterface $object
     * @return void
     */
    public function setObject(CityInterface $object) : void
    {
        if (array_key_exists($object->getName(), $this->pool)) {
            throw new \InvalidArgumentException("Object {$object->getName()} is already exist");
        }

        $this->pool[$object->getName()] = $object;
    }
}
