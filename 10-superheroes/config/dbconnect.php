<?php

    // Inclu la config de connexion à la bdd
    require_once "config.php";

    // Creation de la connexion à la BDD

    // DSN : Domain Source Name
    // ex :'mysql:host=localhost;dbname=test;charset=utf8'

    $db_dsn = $db_type . ":";
    $db_dsn .= "host=" . $db_host . ";";
    $db_dsn .= "port=" . $db_port . ";";
    $db_dsn .= "dbname=" . $db_name . ";";
    $db_dsn .= "charset=" . $db_charset;
    
    try{
        $db = new PDO($db_dsn, $db_user,$db_pwd,[PDO::ATTR_ERRMODE=> PDO::ERRMODE_WARNING]);
        // Activer les erreurs MySQL
    }
    catch (Exception $e){
        die('Erreur : ' . $e->getMessage());
    }
