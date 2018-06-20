<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Creational\ObjectPool;

/**
 * Interface InterfaceCity
 * @package Creational\ObjectPool
 */
interface CityInterface
{

    /**
     * City constructor.
     * @param string $name
     */
    public function __construct(string $name);

    /**
     * @return string
     */
    public function getName(): string;
}
