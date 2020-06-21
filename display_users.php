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
</head>
<body>
<h1 class="box-logo box-title"><a>PC Manager</a></h1>    
<h1>Attribution des postes</h1>

<ul>
    <?php foreach ($attributiondespostes as $utilisateurs): ?>
        <li>
            <?= $utilisateurs['util_pseudo'] ?> - <?= $utilisateurs['util_poste_attribue'] ?> <a
            href="delete_users.php?numUtilisateur=<?= $utilisateurs['util_id'] ?>">Supprimer</a>
        </li>  
    <?php endforeach; ?>
</ul>    
</body>
</html>
