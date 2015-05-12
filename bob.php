<?php require('connexion_bdd.php'); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" class="text/css" href="style.css" meddia="all"/>
        <title>Youtubers Generator !</title>
    </head>
    <body>
        <?php include('menu.php'); ?>
    <div id="content2">
        <div id="contentBubble2">
            <div class="bubble2">
                <img src="img/old/BobLennon.png"/>
            </div>
            <p>
                <?php 
                    $query = "SELECT nom, duree, categorie, nbreVuesCumul, nbreVideos FROM fiche WHERE id=6";
                    $param = array();
                    $req = $bdd->prepare($query);
                    $req->execute($param);

                    $info = $req->fetchALL();

                    echo "<u>Nom</u> : ".$info[0]['nom']."<br>";
                    echo "<u>Depuis</u> : ".$info[0]['duree']."<br>";
                    echo "<u>Catégorie</u> : ".$info[0]['categorie']."<br>";
                    echo "<u>Nombre de vues cumulées</u> : ".$info[0]['nbreVuesCumul']."<br>";
                    echo "<u>Nombre de vidéos</u> : ".$info[0]['nbreVideos']."<br>";

                ?>
            </p>
        </div>
    </div>
    <div id="footer">
        <h3>Created by :</h3>
        <p>Benjamin Wagner et Amaïa Hiribarne. Tous droits réservés.</p>
    </div>
    </body>
</html>