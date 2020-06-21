<?php

//ouverture d'une connexion à la bdd pc_manager
$objetPdo = new PDO('mysql:host=localhost;dbname=pc_manager','root','');

//préparation de la requête d'insertion (SQL)
$pdoStat = $objetPdo->prepare('INSERT INTO utilisateurs VALUES (NULL, :nom, :prenom, :telephone, :pseudonyme, :poste_attribue, :motdepasse)');

//on lie chaque marqueur à une valeur
$pdoStat->bindValue(':nom', $_POST['lastName'], PDO::PARAM_STR);
$pdoStat->bindValue(':prenom', $_POST['firstName'], PDO::PARAM_STR);
$pdoStat->bindValue(':telephone', $_POST['phone'], PDO::PARAM_STR);
$pdoStat->bindValue(':pseudonyme', $_POST['pseudo'], PDO::PARAM_STR);
$pdoStat->bindValue(':poste_attribue', $_POST['poste'], PDO::PARAM_STR);
$pdoStat->bindValue(':motdepasse', $_POST['password'], PDO::PARAM_STR);

//éxécution de la requête préparée
$insertIsok = $pdoStat->execute();

if($insertIsok){
    $message = 'L utilisateur a ete ajoute';
}
else{
    $message = 'Echec de l insertion';
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
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<h1 style="color:#FFFFFF";>Ajout d'utilisateurs</h1>

<p style="color:#FF6600";><?php echo $message; ?></p>

</body>
</hmtl>
