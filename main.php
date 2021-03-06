<?php

namespace Creational\ObjectPool;

require_once "vendor/autoload.php";

$pool = new ObjectPool();

try{
    $pool->setObject(new SomeObject("First"));
    $pool->setObject(new SomeObject("Second"));

    printf("Your object is %s \n", $pool->getObject("First")->getName());
    printf("Your object is %s \n", $pool->getObject("Second")->getName());
} catch (\Exception $e) {
    echo "Caught exception: ",  $e->getMessage(), "\n";
}
