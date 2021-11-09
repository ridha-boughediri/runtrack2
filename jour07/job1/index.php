<?php

session_start();
?>

<?php
// $mavariablesession=0;
// $_SESSION['compteur']=" Session detest";
    if(isset($_POST['reset'])){
        session_destroy();
        header("location: #");

    }

    if(isset($_SESSION['compteur'])){
        $_SESSION['compteur']++;
        echo "nombre de visiter". $_SESSION['compteur']."<br/>";
    }
    else{
        $_SESSION['compteur']=1;
        echo "nombre de visiter". $_SESSION['compteur']."<br/>";
    
    }
        
        
    


?>


    <h1>session en php</h1>
    
    <p> bonjour</p>

    <form action="index.php" method="post">
        <input type="submit" name="reset" value="reset">
    </form>
   