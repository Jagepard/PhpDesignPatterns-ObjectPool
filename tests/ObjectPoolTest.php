<?php

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Creational\ObjectPool\Tests;

use Creational\ObjectPool\SomeObject;
use Creational\ObjectPool\ObjectPool;
use Creational\ObjectPool\ObjectInterface;
use PHPUnit\Framework\TestCase as PHPUnit_Framework_TestCase;

class ObjectPoolTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var ObjectPool
     */
    protected $pool;

    protected function setUp(): void
    {
        $this->pool = new ObjectPool();
        $this->pool->setObject(new SomeObject('First'));
    }

    public function testCityInstance()
    {
        $this->assertInstanceOf(ObjectInterface::class, $this->pool->getObject('First'));
    }

    public function testPool()
    {
        $this->assertEquals($this->pool->getObject('First')->getName(), 'First');
    }
}
