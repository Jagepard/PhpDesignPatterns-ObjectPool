<?php

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */
namespace Creational\ObjectPool;

interface ObjectInterface
{
    /**
     * @return string
     */
    public function getName(): string;
}
