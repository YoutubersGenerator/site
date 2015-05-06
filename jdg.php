<?php 

try {
    $connexion = new PDO('mysql:host=localhost;dbname=fichesytbers;charset=utf8', 'root', '');
    $connexion->exec("SET NAMES 'utf8'");
} catch (PDOException $e) {
    die ("Erreur MySQL : " . $e->getMessage());
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" class="text/css" href="style.css" meddia="all"/>
        <title>Youtubers Generator !</title>
    </head>
    <body>
    <div id="content2">
        <div id="contentBubble2">
            <div class="bubble2">
                <img src="img/old/jdg.jpg"/>
            </div>
            <p>
                <?php 
                    $query = "SELECT nom, duree, categorie, nbreVuesCumul, nbreVideos FROM fiche WHERE id=3";
                    $param = array();
                    $req = $connexion->prepare($query);
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