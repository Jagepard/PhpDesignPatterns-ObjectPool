<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Creational\ObjectPool\Tests;

use Creational\ObjectPool\City;
use Creational\ObjectPool\ObjectPool;
use Creational\ObjectPool\CityInterface;
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
        $this->pool->setObject(new City('London'));
    }

    public function testCityInstance()
    {
        $this->assertInstanceOf(CityInterface::class, $this->pool->getObject('London'));
    }

    public function testPool()
    {
        $this->assertEquals($this->pool->getObject('London')->getName(), 'London');
    }
}
