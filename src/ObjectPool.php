<?php
/**
 * Date: 26.03.18
 * Time: 15:30
 *
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @copyright Copyright (c) 2018, Korotkov Danila
 * @license   http://www.gnu.org/licenses/gpl.html GNU GPLv3.0
 */

namespace Creational\ObjectPool;


class ObjectPool
{

    /**
     * @var array
     */
    protected $pool = [];

    /**
     * @param string $objectName
     * @return mixed|null
     */
    public function getPool(string $objectName): ?City
    {
        return $this->pool[$objectName] ?? null;
    }

    /**
     * @param City $object
     * @return null|void
     */
    public function setPool(City $object)
    {
        $this->pool[$object->getCityName()] = $object ?? null;
    }

    /**
     * @param string $objectName
     * @return null|void
     */
    public function unsetPool(string $objectName)
    {
        if (isset($this->pool[$objectName])) {
            unset($this->pool[$objectName]);
        } else {
            return null;
        }
    }
}