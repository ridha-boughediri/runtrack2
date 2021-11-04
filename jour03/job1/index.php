
<?php
$numbers = [200,204,173,98,171,404,459];

// Affichez seulement les nombres impairs

foreach( $numbers as $value ) 
{


    if( $value % 2 == 0 ){
        echo "$value\n" ."est pair" ."<br>";
    }
     else{
        echo "$value\n" ."est impair" ."<br>";
     }
}
?>