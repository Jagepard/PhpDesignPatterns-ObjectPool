## Table of contents
- [Creational\ObjectPool\ObjectInterface](#creational_objectpool_objectinterface)
- [Creational\ObjectPool\ObjectPool](#creational_objectpool_objectpool)
- [Creational\ObjectPool\SomeObject](#creational_objectpool_someobject)
<hr>

<a id="creational_objectpool_objectinterface"></a>

### Class: Creational\ObjectPool\ObjectInterface
| Visibility | Function |
|:-----------|:---------|
|abstract public|<em><strong>getName</strong>(): string</em><br>|


<a id="creational_objectpool_objectpool"></a>

### Class: Creational\ObjectPool\ObjectPool
| Visibility | Function |
|:-----------|:---------|
|public|<em><strong>getObject</strong>( string $name ): Creational\ObjectPool\ObjectInterface</em><br>Gets an object<br>Получает объект|
|public|<em><strong>setObject</strong>( Creational\ObjectPool\ObjectInterface $object ): void</em><br>Adds an object<br>Добавляет объект|


<a id="creational_objectpool_someobject"></a>

### Class: Creational\ObjectPool\SomeObject
##### implements [Creational\ObjectPool\ObjectInterface](#creational_objectpool_objectinterface)
| Visibility | Function |
|:-----------|:---------|
|public|<em><strong>__construct</strong>( string $name )</em><br>Sets the name<br>Устанавливает имя|
|public|<em><strong>getName</strong>(): string</em><br>Gets a name<br>Получает имя|
<hr>

###### created with [Rudra-Documentation-Collector](#https://github.com/Jagepard/Rudra-Documentation-Collector)
