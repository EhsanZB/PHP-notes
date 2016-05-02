## Error Handling

#### throwing an Exception:

* Exceptions are used for `communicating error states` between different objects.
* Exceptions allow errors to be gracefully `handled`.

> __When an error is detected, the class can throw an exception.__

* Note that an instance of the `PHP built-in class Exception` is what's thrown.

#### try and catch:

* The consuming object would `try` to `catch` the error, make a decision, and `finally` execute a particular piece of code.
* If our application throws an exception, we can catch it and gracefully `handle the error`.


