<?php

session_start();

if(!isset($_SESSION["supervisorname"])){
    header("Location: login.php");
    exit(); 
  }

?>


<!doctype html>
<html lang="fr">

  <head>

    <meta charset="UTF-8">

    <meta name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>PC Manager</title>

    <link rel="shortcut icon" type="image/x-icon" href="PC_Manager_logo.png" />
    
    <link rel="stylesheet" href="style2.css" />
  
  </head>
  
  <body>
    
    <div id="logobox">    
    
      <img src="PC_Manager_logo.png" width="70" height="60" alt="" title="" />    

    </div>

    <h1 class="logoname"><a>PC Manager</a></h1>

    <p class="floatstop"></p>

    <div class="sucess">
      
      <h1>Bonjour <?php echo $_SESSION['supervisorname']; ?>!</h1>
      
      <p>Vous allez etre rediriger vers votre tableau de bord.</p>            
    
    </div>

    <meta http-equiv="refresh" content="3;URL=dashboard.php">

  </body>

</html>