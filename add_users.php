<!doctype html>
<html lang="fr">

    <head>

        <meta charset="UTF-8">
    
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <title>PC Manager</title>

        <link rel="shortcut icon" type="image/x-icon" href="PC_Manager_logo.png" />
    
        <link rel="stylesheet" type="text/css" href="style.css" />
   
    </head>

    <body>

        <div id="logobox">    
        
            <img src="PC_Manager_logo.png" width="70" height="60" alt="" title="" />

        </div> 

        <h1 class="logoname"><a>PC Manager</a></h1>
    
        <p class="floatstop"></p>

        <h1 style="color:#FFFFFF";>Ajouter un utilisateur</h1>

        <form action="insert.php" method="post">

            <p style="color:#D2483C";>
                <label for="nom">Nom</label>
                <input id="nom" type="text" name="firstName">
            </p>

            <p style="color:#D2483C";>
                <label for="prenom">Prenom</label>
                <input type="text" id="prenom" name="lastName">
            </p>

            <p style="color:#D2483C";>
                <label for="tel">Telephone</label>
                <input type="text" id="tel" name="phone"> 
            </p>

            <p style="color:#D2483C";>
                <label for="pseudonyme">Pseudo</label>
                <input type="text" id="pseudonyme" name="pseudo"> 
            </p>

            <p style="color:#D2483C";>
                <label for="poste_attribue">Poste attribue</label>
                <input type="text" id="poste_attribue" name="poste"> 
            </p>

            <p style="color:#D2483C";>
                <label for="motdepasse">Mot de passe</label>
                <input type="text" id="motdepasse" name="password"> 
            </p>

            <p><input type="submit" value="Creer utilisateur"></p>

        </form>

        <a href="display_users.php" target="_blank"> <input type="button" value="Visualiser les attributions de poste"> </a>

        <a href="dashboard.php" target="_blank"> <input type="button" value="Revenir au tableau de bord"> </a>

    </body>

</html>          

<?php

?>          