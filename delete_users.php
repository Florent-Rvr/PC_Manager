<?php

//ouverture d'une connexion à la bdd pc_manager
$objetPdo = new PDO('mysql:host=localhost;dbname=pc_manager','root','');
//préparation de la requête
$pdoStat = $objetPdo->prepare('DELETE FROM utilisateurs WHERE util_id=:num LIMIT 1');

//liaison du paramètre nommé
$pdoStat->bindValue(':num', $_GET['numUtilisateur'], PDO::PARAM_INT);

//exécution de la requête
$executeIsOk = $pdoStat->execute();

if($executeIsOk){
    $message = 'L utilisateur a ete supprime';
}
else{
    $message = 'Echec de la suppression de l utilisateur';
}
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
    <link rel="stylesheet" type="text/css" href="style.css" />    
</head>
<body>
<h1>Suppression</h1>
<p style="color:#FF6600";><?= $message ?></p>
</body>
</html>