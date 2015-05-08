<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=ytbgen;charset=utf8', 'root', '');
    $bdd->exec("SET NAMES 'utf8'");
} catch (PDOException $e) {
    die ("Erreur MySQL : " . $e->getMessage());
}
?>