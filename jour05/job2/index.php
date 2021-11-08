<?php
$int="bonjour";
function bonjour($int) {
   if ($int == "bonjour") {
      return true;
   } else {
      return false;
   }
}
if (bonjour("bonjour")) echo "Returned true!"."$int";
?>
