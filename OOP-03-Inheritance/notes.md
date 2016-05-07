## Inheritance

* Inheritance allows classes to `inherit properties and methods` from other classes.
* Using extensions, we can `overwrite` methods of the parent class. For example, overwriting the constructor to perform a new set of default actions.
* Applying 'inheritance' can reduce the number of lines of code in our project!

> __open/close principle__: classes are `open for extension` but `closed for modification`.

* Inheritance also allows us to efficiently reuse the code found in our base class.
* Using `'extends'` keyword enables inheritance in php.
* Child class inherits all the `public and protected` properties and methods of the parent class.
* note that in the constructor function of the Child class, we have to call the parent constructor first by using `'parent::'` keyword.

```php
<?php

Class Employee extends Person
{
    private $salary = 5000;

    public function __construct($newName)
    {
        parent::__construct($newName);
        echo "New employee has been created." . "<br>";
    }

    public function getSalary(){
        return $this->salary;
    }
}



```


