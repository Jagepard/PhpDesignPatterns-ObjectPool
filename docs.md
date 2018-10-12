## Table of contents

- [\Creational\ObjectPool\ObjectPool](#class-creationalobjectpoolobjectpool)
- [\Creational\ObjectPool\CityInterface (interface)](#interface-creationalobjectpoolcityinterface)
- [\Creational\ObjectPool\City](#class-creationalobjectpoolcity)

<hr />

### Class: \Creational\ObjectPool\ObjectPool

> Class ObjectPool

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getObject(</strong><em>\string</em> <strong>$name</strong>)</strong> : <em>[\Creational\ObjectPool\CityInterface](#interface-creationalobjectpoolcityinterface)</em> |
| public | <strong>setObject(</strong><em>[\Creational\ObjectPool\CityInterface](#interface-creationalobjectpoolcityinterface)</em> <strong>$object</strong>)</strong> : <em>void</em> |

<hr />

### Interface: \Creational\ObjectPool\CityInterface

> Interface InterfaceCity

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>\string</em> <strong>$name</strong>)</strong> : <em>void</em><br /><em>City constructor.</em> |
| public | <strong>getName()</strong> : <em>string</em> |

<hr />

### Class: \Creational\ObjectPool\City

> Class City

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>\string</em> <strong>$name</strong>)</strong> : <em>void</em><br /><em>City constructor.</em> |
| public | <strong>getName()</strong> : <em>string</em> |

*This class implements [\Creational\ObjectPool\CityInterface](#interface-creationalobjectpoolcityinterface)*

