<?php
$job ="Im sorry Dave I'm afraid I can'tdo that";

$charvoyelles = ['a', 'e', 'i', 'I','o', 'u', 'y'];

,
for($i=0;isset($job[$i]);$i++){
    foreach($charvoyelles as $value){
        if ($job[$i] == $value) { 
            echo $job[$i];
        }
    }
}



?>