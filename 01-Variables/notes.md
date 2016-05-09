## Variables

* declaring a variable using `$`
```php
<?php

$name = 'Ehsan';

echo "Hello $name";     // Hello Ehsan
echo 'Hello $name';     // Hello $name
```
* concatenation using period

```php
<?php

echo "Hello " . $name;  // Hello Ehsan
echo 'Hello ' . $name;  // Hello Ehsan

$lastName = 'ZB';
echo 'Hello ' . $name . ' ' . $lastName; // Hello Ehsan ZB
```

### String

> strlen( );

```php
<?php

$str1 = " This is a test   ";  // note the white spaces!
echo strlen($str1);            // 18: number of characters including white spaces
```
> trim( );

* strips whitespace from the `beginning and end` of strings (for example, tabs, spaces, newline characters, carriage returns)

```php
<?php

echo trim($str1);              // This is a test
echo strlen(trim($str1));      // 14
````
> rtrim( );

* strips whitespace (or other characters) from the `end of a string`.

> strtolower( );
> strtoupper( );
> ucfirst( );
> ucwords( );
> lcfirst( );

```php
<?php

$messy_string = "tHe eARth IS 4 BILlioN yEarS OlD!";
$string = "hello world.";

echo strtolower($messy_string);    // the earth is 4 billion years old!
echo strtoupper($messy_string);    // THE EARTH IS 4 BILLION YEARS OLD!
echo ucfirst($string);             // Hello world
echo ucwords($string);             // Hello World
echo lcfirst(strtoupper($string)); // hELLO WORLD.
```
> string substr

* substr( string $string , int $start [, int $length ] )
* if length omitted, the substring starting from start `until the end of the string`.
* note that it's a `zeo-based` index.

```php
<?php

////////012345//////////
$str = "abcdef";

echo substr($str,2);    // cdef
echo substr($str,1,3);  // bcd
echo substr($str,0,2);  // ab
echo substr($str,0,3);  // abc
echo substr($str,-2);   // ef
echo substr($str,-4,2); // cd
```

> strrev( );

```php
<?php

$str = "FEDCBA";
echo strrev($str);     // ABCDEF
```

> isset( );

* isset( ) determines whether a `variable exists or not`. A variable that is never declared will `return false`.
* the oppossite of isset is unset( )

```php
<?php

//$variable;
$variable = 5;

if (isset($variable)){
    echo "variable is set";
}else{
    echo "variable is NOT set";
}
```


### Date

* [List of all supported timezones.](http://php.net/manual/en/timezones.php)

```php
<?php
date_default_timezone_set("America/Vancouver");

echo date('F M');   // current month; F -> full text of the month,  M -> short version (e.g: September, Sep)
echo date('d');     // day of the month e.g: 09
echo date('D');     // day of the week (short text, e.g: Thu,Mon,..)
echo date('l');     // day of the week (full text, e.g: Thuesday, Monday)
echo date('Y');     // year (full text, e.g: 2016)
echo date('y');     // year (short text, e.g: 16)
echo date('H:i');   // time (24) e.g: 14:59
echo date('h:i a'); // time (12) e.g: 2.59 pm
```

### Time

```php
<?php
$time = time();
echo date("F d, Y h:i a",0);             // December 31, 1969 04:00 pm
echo date("F d, Y h:i a",$time);         // returns the current time
echo date("F d, Y h:i a",$time + 60*60); // add one hour to the current time

$birthdate = mktime(0,0,0,8,26,1981);    // ($hour,$minute,$second,$month,$day,$year)
echo $birthdate;                         // 367657200
echo date("F d, Y h:i a",$birthdate);    // August 26, 1981 12:00 am
```

##### Example:
Getting the default timezone

```php
<?php
date_default_timezone_set('America/Los_Angeles');
$script_tz = date_default_timezone_get();

if (strcmp($script_tz, ini_get('date.timezone'))){
    echo 'Script timezone differs from ini-set timezone.';
} else {
    echo 'Script timezone and ini-set timezone match.';
}
?>

