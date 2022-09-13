<?php
$x = strtotime("Sunday");
$y = strtotime("+6 weeks", $x);

while ($x < $y) {
  echo date("M d", $x) . "<br>";
  $x = strtotime("+1 week", $x);
}
?>