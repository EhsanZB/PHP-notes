## Abstract class

* Similar to interfaces, abstract classes help establish a contract between objects.
* In Abstract classes (not in interfaces), we can define `common methods` in which all classes extending from our defined abstract class will `inherit` the common method (including its implementation).
* We can create abstract classes in php using `'abstract'` keyword.

> Abstract classes are those classes which `can not be directly initialized`.

* We can not create object of abstract classes.
* Abstract classes always created for `inheritance purposes` (we can only inherit abstract class in the child class).

> _Any class that contains `at least one abstract method` must also be abstract._

* Methods defined as abstract, cannot define the implementation (just to declare the method's signature).

> _When `inheriting from an abstract class`, all methods marked abstract in the parent's class declaration `must be defined` by the child._

> A class may extend from `one abstract class` but implement `many interfaces`.


```php

<?php

abstract class AbstractAge
{
    abstract public function getAge();
    abstract public function setAge($age);

    public function printAge()
    {
        echo $this->getAge() . " years old." . PHP_EOL;
    }
}
````