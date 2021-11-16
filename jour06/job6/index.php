<?php 


if(isset($_POST['envoi'])){ // si formulaire soumis
$style = $_POST['choix']; // ici on récupère un tableau qui contient toutes les valeurs
}

// 
?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?php echo $style ?>.css">
    
</head>
<body>

<form method="post" action="">
 
<label for="lname">choisissez votre style:</label>
<select type="style" name="choix">

            <option value="style1">style1</option>
            <option value="style2" >style2</option>
            <option value="style3" >style3</option>
  
</select>
<input type="submit" name="envoi" value="submit">
</form>


</body>
</html>