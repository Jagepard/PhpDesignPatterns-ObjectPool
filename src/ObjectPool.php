<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Creational\ObjectPool;

/**
 * Class ObjectPool
 * @package Creational\ObjectPool
 */
class ObjectPool
{

    /**
     * @var array
     */
    protected $pool = [];

    /**
     * @param string $name
     * @return CityInterface
     */
    public function getObject(string $name): CityInterface
    {
        return $this->pool[$name];
    }

    /**
     * @param CityInterface $object
     * @return void
     */
    public function setObject(CityInterface $object) : void
    {
        $this->pool[$object->getName()] = $object;
    }
}
