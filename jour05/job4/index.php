<?php


function calcule($a,$operation,$b){


if ($operation=="+") {
  echo $a+$b;
}

elseif ($operation=="*") {
  echo $a*$b;
}
elseif ($operation=="/") {
  echo $a/$b;
}



}
calcule(100,"/",35);



?>