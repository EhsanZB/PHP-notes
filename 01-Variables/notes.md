## Variables

* [List of all supported timezones.](http://php.net/manual/en/timezones.php)

### Date

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

