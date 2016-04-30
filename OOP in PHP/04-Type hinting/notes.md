## Type Hinting

* It `forces` the class to be `initialized with a specified type` as the parameter.
* The class will not initialize and will throw a `catchable fatal error` when the parameter is not of that predefined type.

> __Catchable Fatal Error__ can be handled with an `error handler`, so the index.php script will continue to run.

* In PHP version 7, type hinting will `throw an exception` if the wrong type was passed.