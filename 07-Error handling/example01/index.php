<?php

require 'Person.php';

$person = new Person();
//$person->getName();    // Fatal error: Uncaught exception 'Exception' with message 'No name has been set yet!'


// handle the error using try/catch:
try{
    $person->getName();
}catch (Exception $error){
    echo "MESSAGE: " . $error->getMessage() . "<br>";
    echo "LINE: " . $error->getLine() . "<br>";
    echo "TRACE: " . $error->getTraceAsString() . "<br>";
    echo "CODE: " . $error->getCode() . "<br>";
}finally{
    echo "Error handled by try/catch!";
}