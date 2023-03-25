<?php
function compute($value) {
    return strlen($value) * 2;

}

$str = readLine("Enter a word: ");
echo compute($str);
?>
