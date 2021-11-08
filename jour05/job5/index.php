<?php

$str="char";
$char="char";
function occurences($str,$char){
  $j=0;
  for($i=0;isset($str[$i]);$i++){

 if($str[$i]==$char){
   $j++;

 }     
  }  ;

  return $j;
}

echo occurences($str,"d");

?>
