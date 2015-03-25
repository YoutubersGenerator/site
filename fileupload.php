<html>
    <head><meta charset="utf-8"/></head>
<body>
<?php
$nomOrigine = $_FILES['monfichier']['name'];
$elementsChemin = pathinfo($nomOrigine);
// Copie dans le repertoire du script avec un nom
// incluant l'heure a la seconde pres 
$repertoireDestination = dirname(__FILE__)."/";
    if (move_uploaded_file($_FILES["monfichier"]["tmp_name"], 
                                 $repertoireDestination)) {
    echo "Le fichier temporaire ".$_FILES["monfichier"]["tmp_name"].
            " a été déplacé vers ".$repertoireDestination.$nomDestination;
} else {
    echo "Le fichier n'a pas été uploadé (trop gros ?) ou ".
            "Le déplacement du fichier temporaire a échoué".
            " vérifiez l'existence du répertoire ".$repertoireDestination;
}
?>
</body>
</html>
    
