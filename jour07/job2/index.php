<html> 
  <head> 
    <title>PHP Code to Count Number of Visitors Using Cookies: PHPCODER</title> 
 </head> 
<body> 


<?php 
if (!isset($_COOKIE['count'])) { 
  echo "Welcome! premiere visite."; 
  $cookie = 1;
  setcookie("count", $cookie);
}else{
  $cookie = ++$_COOKIE['count'];
  setcookie("count", $cookie); 
  echo "Vous avez consulté cette page ".$_COOKIE['count']." fois."; 
  }

  if(isset($_POST['reset'])){
    // cookies destroy();
    setcookie("count");
    header("location: #");

}

?> 


<h1>les cookies en php</h1>
   

    <form action="index.php" method="post">
        <input type="submit" name="reset" value="reset">
    </form>
   

  </body> 
</html>
