<?php
 

 for ($i = 1; $i <= 1000; $i++) /{

    $counter = 0;
    for ($j = 1; $j <= $i; $j++) {
    
    
        if ($i % $j == 0) {
    
            $counter++;
        }
    }
    
    if ($counter == 2) {
    
        echo $i;
        echo "<br/>";
    }
    }

 ?>