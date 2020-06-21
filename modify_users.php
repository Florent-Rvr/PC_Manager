<?php

//ouverture d'une connexion à la bdd pc_manager
$objetPdo = new PDO('mysql:host=localhost;dbname=pc_manager','root','');

//préparation de la requête
$pdoStat = $objetPdo->prepare('SELECT * FROM utilisateurs WHERE util_id=:num');

$pdoStat->bindValue(':num',$_GET['numUtilisateur'],PDO::PARAM_INT);

//exécution de la requête
$executeIsOk = $pdoStat->execute();

//récupération du résultat
$utilisateur = $pdoStat->fetch();

?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>PC Manager</title>
    <link rel="shortcut icon" type="image/x-icon" href="PC_Manager_logo.png" />    
</head>
<body>
<h1 class="box-title">Modifier un utilisateur</h1>
<form action="modify.php" method="post">
    <input type="hidden" name="numUtilisateur" value="<?= $utilisateur['util_id'] ?>">
    <p>
        <label for="nom">Nom</label>
        <input id="nom" type="text" name="firstName" value="<?= $utilisateur['util_nom']; ?>">
    </p>
    <p>
        <label for="prenom">Prenom</label>
        <input type="text" id="prenom" name="lastName" value="<?= $utilisateur['util_prenom']; ?>">
    </p>
    <p>
        <label for="tel">Telephone</label>
        <input type="text" id="tel" name="phone" value="<?= $utilisateur['util_telephone']; ?>">
    </p>
    <p>
        <label for="pseudonyme">Pseudo</label>
        <input type="text" id="pseudonyme" name="pseudo" value="<?= $utilisateur['util_pseudo']; ?>"> 
    </p>
    <p>
        <label for="poste_attribue">Poste attribue</label>
        <input type="text" id="poste_attribue" name="poste" value="<?= $utilisateur['util_poste_attribue']; ?>"> 
    </p>
    <p>
        <label for="motdepasse">Mot de passe</label>
        <input type="text" id="motdepasse" name="password" value="<?= $utilisateur['util_motdepasse']; ?>"> 
    </p>
    <p><input type="submit" value="Enregistrer les modifications"></p>
</form>
</body>
</html>