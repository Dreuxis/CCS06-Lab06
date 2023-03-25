<?php
//FIle Name: hello.php
//Example already given

function greet(){
    $message = "Hello";
    $message .= " World!";
    $message .= " The date today is ";
    $message .= date("m d y");
    return $message;
}

echo greet();

?>