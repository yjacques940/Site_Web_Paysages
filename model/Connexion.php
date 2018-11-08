<?php

class Connexion
{
	// protected car on en veut pas qu'il soit accessible directement, seulement par ses filles en héritage
    protected function getConnexion()
    {
        $db = new \PDO('mysql:host=localhost;dbname=db_paysages;charset=utf8', 'root', '',array( 
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, 
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8" )); // le \pdo c'est pour le namespace globale
        return $db;
    }
}



?>