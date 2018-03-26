<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @copyright Copyright (c) 2018, Korotkov Danila
 * @license   http://www.gnu.org/licenses/gpl.html GNU GPLv3.0
 */

use PHPUnit\Framework\TestCase as PHPUnit_Framework_TestCase;
use Creational\ObjectPool\ObjectPool;
use Creational\ObjectPool\InterfaceCity;
use Creational\ObjectPool\City;


/**
 * Class FactoryMethodTest
 */
class ObjectPoolTest extends PHPUnit_Framework_TestCase
{

    /**
     * @var
     */
    protected $objectPool;

    protected function setUp(): void
    {
        $this->objectPool = new ObjectPool();
        $this->objectPool->setPool(new City('London'));
    }

    public function testCityInstance()
    {
        $this->assertInstanceOf(InterfaceCity::class, $this->getObjectPool()->getPool('London'));
    }

    public function testPool()
    {
        $this->assertEquals($this->getObjectPool()->getPool('London')->getCityName(), 'London');
        $this->assertNull($this->objectPool->setPool(new City('London')));
        $this->assertNull($this->getObjectPool()->getPool('Berlin'));
        $this->assertNull($this->getObjectPool()->unsetPool('Berlin'));

        $this->objectPool->unsetPool('London');
        $this->assertNull($this->getObjectPool()->getPool('London'));
    }

    /**
     * @return mixed
     */
    public function getObjectPool()
    {
        return $this->objectPool;
    }
}
