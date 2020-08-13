<?php

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Creational\ObjectPool\Tests;

use Creational\ObjectPool\{SomeObject, ObjectPool, ObjectInterface};
use PHPUnit\Framework\TestCase as PHPUnit_Framework_TestCase;

class ObjectPoolTest extends PHPUnit_Framework_TestCase
{
    protected ObjectPool $pool;

    protected function setUp(): void
    {
        $this->pool = new ObjectPool();
        $this->pool->setObject(new SomeObject("First"));
    }

    public function testCityInstance()
    {
        $this->assertInstanceOf(ObjectInterface::class, $this->pool->getObject("First"));
    }

    public function testPool()
    {
        $this->assertEquals("First", $this->pool->getObject("First")->getName());
    }
}
