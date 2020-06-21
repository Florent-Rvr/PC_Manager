<!doctype html>
<html lang="fr">
<head>
    <title>PC Manager</title>
    <link rel="shortcut icon" type="image/x-icon" href="PC_Manager_logo.png" />
    <link rel="stylesheet" type="text/css" href="style.css" />
   
</head>
<body>
<h1 class="box-logo box-title"><a>PC Manager</a></h1>    
<h1 class="box-title">Ajouter un utilisateur</h1>
<form action="insert.php" method="post">

    <p style="color:#FF6600";>
        <label for="nom">Nom</label>
        <input id="nom" type="text" name="firstName">
    </p>
    <p style="color:#FF6600";>
        <label for="prenom">Prenom</label>
        <input type="text" id="prenom" name="lastName">
    </p>
    <p style="color:#FF6600";>
        <label for="tel">Telephone</label>
        <input type="text" id="tel" name="phone"> 
    </p>
    <p style="color:#FF6600";>
        <label for="pseudonyme">Pseudo</label>
        <input type="text" id="pseudonyme" name="pseudo"> 
    </p>
    <p style="color:#FF6600";>
        <label for="poste_attribue">Poste attribue</label>
        <input type="text" id="poste_attribue" name="poste"> 
    </p>
    <p style="color:#FF6600";>
        <label for="motdepasse">Mot de passe</label>
        <input type="text" id="motdepasse" name="password"> 
    </p>
    <p><input type="submit" value="Creer utilisateur"></p>
</form>        

</body>
</html>          

<?php

?>          