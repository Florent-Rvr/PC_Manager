<?php

//ouverture d'une connexion à la bdd pc_manager
$objetPdo = new PDO('mysql:host=localhost;dbname=pc_manager','root','');

//préparation de la requête d'insertion (SQL)
$pdoStat = $objetPdo->prepare('UPDATE utilisateurs set util_nom=:nom, util_prenom=:prenom, util_telephone=:telephone, util_pseudo=:pseudonyme, util_poste_attribue=:poste_attribue, util_motdepasse=:motdepasse WHERE util_id=:num LIMIT 1');

//liaison du paramètre nommé
$pdoStat->bindValue(':num', $_POST['numUtilisateur'], PDO::PARAM_INT);
//liaison de chaque marqueur à une valeur
$pdoStat->bindValue(':nom', $_POST['lastName'], PDO::PARAM_STR);
$pdoStat->bindValue(':prenom', $_POST['firstName'], PDO::PARAM_STR);
$pdoStat->bindValue(':telephone', $_POST['phone'], PDO::PARAM_STR);
$pdoStat->bindValue(':pseudonyme', $_POST['pseudo'], PDO::PARAM_STR);
$pdoStat->bindValue(':poste_attribue', $_POST['poste'], PDO::PARAM_STR);
$pdoStat->bindValue(':motdepasse', $_POST['password'], PDO::PARAM_STR);

//exécution de la requête
$executeIsOk = $pdoStat->execute();

if($executeIsOk){
    $message = 'L utilisateur a ete mis a jour';
}
else{
    $message = 'Echec de la mis a jour de l utilisateur';
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
<h1 style="color:#FFFFFF";>Resultat de la modification</h1>
<p style="color:#FF6600";><?= $message ?></p>
</body>
</html>