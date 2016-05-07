<?php

include 'Person.php';
include 'Application.php';


$person = new Person();
$person->setName('John Doe');

$app = new Application($person);

echo "<br>";
$app->run();  // John Doe
