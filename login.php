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

    <?php

      require('config.php');
      session_start();

      if (isset($_POST['supervisorname'])){
       $supervisorname = stripslashes($_REQUEST['supervisorname']);
       $supervisorname = mysqli_real_escape_string($conn, $supervisorname);
       $password = stripslashes($_REQUEST['password']);
       $password = mysqli_real_escape_string($conn, $password);
       $query = "SELECT * FROM `authentification` WHERE supervisorname='$supervisorname' and password='".hash('sha256', $password)."'";
       $result = mysqli_query($conn,$query) or die(mysql_error());
       $rows = mysqli_num_rows($result);
      
      if($rows==1){
        $_SESSION['supervisorname'] = $supervisorname;
        header("Location: index.php");
      }

      else{
        $message = "Le nom d'administrateur ou le mot de passe est incorrect.";
      }
      }
    ?>

    <form class="box" action="" method="post" name="login">

       <h1 class="box-logo box-title"><a>Portail d'authentification</a></h1>

       <h1 class="box-title">PC Manager</h1>

       <input type="text" class="box-input" name="supervisorname" placeholder="Nom d'administrateur">

       <input type="password" class="box-input" name="password" placeholder="Mot de passe">
      
       <input type="submit" value="Connexion " name="submit" class="box-button">
       
       <?php if (! empty($message)) { ?>
        
       <p class="errorMessage"><?php echo $message; ?></p>
        
       <?php } ?>

    </form>
    
  </body>

</html>