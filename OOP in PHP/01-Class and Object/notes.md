## Class and Object

> basic OOP terminologies, definitions and hints:

* `class is a blue print` and object is actual `instance` created from that blue print.
* `Multiple objects` can be created from one class.
* A class defines properties and methods.
* Methods perform actions such as `altering` the properties or `retrieving` properties.
* note that in a class, `Functions = methods` and `Variables = properties`.
* When we declare a property with the `‘var’` keyword, it is considered `‘public’`.
* All objects can have a special `built-in method` called a ‘constructor’.
* [Magic method](http://php.net/manual/en/language.oop5.magic.php) `__construct` allows us to initialise our object’s properties, when we instantiate (create) an object.
* `Getter and Setter` are common OOP convention in which they allow us to create methods to ‘set’ and ‘get’ properties.
* The `$this` is a built-in variable (built into all objects) which `points to the current object`.
* $this is kind of special `self-referencing` variable.
* `'->'` refers to properties/methods in scope.
* `Classes` start with an uppercase. If a class has multiple words, `PascalCase` is used.
* `Method` definitions inside the class are named using the `camelCase`.

> _A class should also represent one thing, one responsibility. This is known as the `single responsibility principle`._


```php
<?php

class Person
{

    public $name; // equal to 'var $name;'

    function __construct($defaultName){
        echo "new person '$defaultName' has been created!" . "<br>";
        $this->name = $defaultName;
    }

    // Getter (Accessor)
    function getName(){
        return $this->name;
    }

    // Setter (Mutator)
    function setName($name){
        $this->name = $name;
    }

}
```