<?php

//ouverture d'une connexion à la bdd pc_manager
$objetPdo = new PDO('mysql:host=localhost;dbname=pc_manager','root','');

//préparation de la requête
$pdoStat = $objetPdo->prepare('SELECT * FROM utilisateurs ORDER BY util_nom ASC');

//éxécution de la requête
$executeIsOk = $pdoStat->execute();

//récupération des résultats
$attributiondespostes = $pdoStat->fetchAll();
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
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<div id="logobox">    
<img src="PC_Manager_logo.png" width="70" height="60" alt="" title="" />    
</div> 
<h1 class="logoname"><a>PC Manager</a></h1>
<p class="floatstop"></p>  
<h1 style="color:#FFFFFF";>Attribution des postes</h1>

<ul>
    <?php foreach ($attributiondespostes as $utilisateurs): ?>
        <li style="color:#FF6600";>
            <?= $utilisateurs['util_pseudo'] ?> - <?= $utilisateurs['util_poste_attribue'] ?>
        <a
            href="delete_users.php?numUtilisateur=<?= $utilisateurs['util_id'] ?>"style="color:#00CCFF";>Supprimer</a>
        <a
            href="modify_users.php?numUtilisateur=<?= $utilisateurs['util_id'] ?>"style="color:#00CCFF";>Modifier</a>    
        </li>  
    <?php endforeach; ?>
</ul>

<a href="index.php" target="_blank"> <input type="button" value="Revenir au tableau de bord"> </a>
</body>
</html>
