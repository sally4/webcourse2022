<?php
$input = 1234321;
echo '<br>'.'Input string '. $input;

$reverse = strrev($input);
echo '<br>'.'Reverse string '.$reverse;

if($input == $reverse) {
echo '<br>'.$input.' is a palindrome';
}
else {
echo '<br>'.$input.' is not a palindrome';
}
?>