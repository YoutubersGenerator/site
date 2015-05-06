<?php 
    $fichiers = $_POST['fichiers'];
    foreach($fichiers as $file) 
    {  
        echo $file ,'<br/>';
    }
?>