## Variables

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

