<?php 

try{
//$pdo= new PDO("mysql:host=localhost;dbname=pfe","root","amalharrak");
	$pdo = new PDO('mysql:host=localhost;dbname=pfe', 'root', 'amalharrak');
    }
catch(Exception $e) {
    die("erreur de connexion:".$e->getMessage());
}

?>