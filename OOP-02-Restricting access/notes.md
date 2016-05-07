## Restricting access

* One of the fundamental principles in OOP is `‘encapsulation’` in which we restrict access to the properties in our objects.
* Encapsulation can be implemented using `'access modifiers'`:
    1. public    (default)
    2. private
    3. protected
    4. static

> Methods and properties with the __public__ scope are `accessible internally and externally`.

* Using the `'->'`, methods and properties that are in scope can be
  accessed.

> Methods and properties with the __protected__ scope are only `accessible within itself or child classes`.

* a child class can access the parent public and protected methods.

> Methods and properties declared __private__ are only `accessible within itself`.

* Child classes can not access private methods and properties of the parent.

> Methods and properties declared __statict__ can be `called without instantiating` a class. To call static types, use the `::` operator.

* all objects created from a class with a static property will `share` the same value for that property.
