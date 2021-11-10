<?php

session_start();
?>

<html>
<head>
<title>Formulaire d'identification</title>
</head>

<body>
<form action="index.php" method="post">
    <label for="test">
        <input type="text" name="prenom" id="">
    </label>
    
    <br />
    <label for="envoi">
    
    </label>
    <label for="recommence">
        <input type="submit" name="submit" value="submit">
        <input type="submit" name="reset" value="reset">

    </label>
</form>

</body>
</html>
<?php 



if(isset($_POST["reset"])){

    session_destroy();
    header("Location: #");

}

if(!isset($_SESSION["prenom"])){
    $_SESSION["prenom"]="";
    

}


if(isset($_POST["prenom"])){
    $_SESSION["prenom"]=$_SESSION["prenom"].$_POST["prenom"]."<br/>";

}
echo  $_SESSION["prenom"];


    ?>
