<?php
/**
 * Date: 26.03.18
 * Time: 14:50
 *
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @copyright Copyright (c) 2018, Korotkov Danila
 * @license   http://www.gnu.org/licenses/gpl.html GNU GPLv3.0
 */

namespace Creational\ObjectPool;


/**
 * Interface InterfaceCity
 * @package Creational\ObjectPool
 */
interface InterfaceCity
{

    /**
     * City constructor.
     * @param string $cityName
     */
    public function __construct(string $cityName);
}