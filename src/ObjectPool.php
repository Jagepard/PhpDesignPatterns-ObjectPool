<?php

declare(strict_types=1);

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Creational\ObjectPool;

final class ObjectPool
{
    private array $pool = [];

    public function getObject(string $name): ObjectInterface
    {
        if (array_key_exists($name, $this->pool)) {
            return $this->pool[$name];
        }

        throw new \InvalidArgumentException("Object $name does'nt exist");
    }

    public function setObject(ObjectInterface $object): void
    {
        if (array_key_exists($object->getName(), $this->pool)) {
            throw new \InvalidArgumentException("Object {$object->getName()} is already exist");
        }

        $this->pool[$object->getName()] = $object;
    }
}
