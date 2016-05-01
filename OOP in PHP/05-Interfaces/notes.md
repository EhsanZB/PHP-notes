## Interfaces

* It allow us to create code which specifies `which methods a class must implement`, without having to define how these methods are handled.
* It `enforces definition` of some set of methods in the class.
* We can create interface in php using keyword `'interface'`.
* In other words, an interface establishes a contract between objects.

> _Methods in interfaces must be declared public._

```php
<?php

interface MyInterface
{
    public function getName();
    public function setName($name);
}
```

> _Classes that implement an interface must implement the `methods with the exact same signatures` as defined in the interface class._

* We can implement an interface in our class using `'implements'` keyword.

```php
<?php

class Person implements MyInterface
{

}
```