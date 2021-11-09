

<?php 

echo $_POST['prenom']."<br/>";
echo $_POST['prenom']++;
// echo $_POST['my-button']."<br/>";


// var_dump($_POST);




?>


<html>
<head>
<title>Formulaire d'identification</title>
</head>

<body>
<form action="index.php" method="post">
    <label for="cheese">
        <input type="text" name="prenom" id="">
    </label>
    
    <br />
    <label for="envoi">
    <button id="my-button">valider</button>
    </label>
    <label for="recommence">
        <input type="submit" name="submit" value="submit">
    </label>
</form>

</body>
</html>
