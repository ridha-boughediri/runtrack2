<?php

$str="str";
function leetspeak($str){
    for($i=0;isset($str[$i]);$i++){


        if ($str[$i]=="A"|| $str[$i]== "a") {
            echo "4";
          }
    
          elseif ($str[$i]=="B" || $str[$i]=="b") {
            echo "8";
          }
          elseif ($str[$i]=="E"||$str[$i]=="e") {
            echo "3";
          }
          elseif ($str[$i]=="G"||$str[$i]=="g"){
            echo "6";
          }
          elseif ($str[$i]=="L"||$str[$i]=="l"){
            echo "1";
          }
          elseif ($str[$i]=="S"||$str[$i]=="s"){
            echo "5";
          }
          elseif ($str[$i]=="T"||$str[$i]=="t"){
            echo "7";
          }
        else
            echo $str[$i];
    }
      
}
leetspeak($str);
?>

