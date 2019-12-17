<?php

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */
namespace Creational\ObjectPool;

interface ObjectInterface
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
