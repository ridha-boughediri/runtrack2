<?php
for ($i=0; $i <= 100; $i++) { 
    if ($i>=0 && $i<=20) {
        echo "<i>".$i."</i><br>";
        // continue;
    }
//    

elseif ($i>=25 && $i<=41 && $i>=43 && $i<=50) {
    echo "<u>".$i."</u><br>";
}elseif ($i==42) {
    echo "La Plateforme_";
    echo "<br/>";
} else {
    echo $i;
    echo "<br/>";
}

}
?>