<?php
    //paramètres de connexion à la base de donnée
    define('DB_SERVER', 'localhost');
    
    define('DB_USERNAME', 'root');
    
    define('DB_PASSWORD', '');
    
    define('DB_NAME', 'pc_manager');
 
    $conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
    if($conn === false){
        die("ERREUR : Impossible de se connecter. " . mysqli_connect_error());
    }

?>