    <?php
    try
    {
        $db = new PDO('mysql:host=localhost;dbname=ytgen', 'root', ''); //connexion BDD
    }
    catch (Exception $e)
    {
        die('Erreur : ' . $e->getMessage());  //Si erreur
    }

	if($_POST['envoyer']) {
		$i = 0;
		foreach ($_FILES['audio']['name'] as $filename) {
			while($d = $ytb->fetch()) {
				$dossier = 'audio/'.$d[0];
			}
            
			//echo $dossier;
			$tmp_file = $_FILES['audio']['tmp_name'][$i];

		    if(!is_uploaded_file($tmp_file) )
		    {
		        exit("Le fichier est introuvable");
		    }

		    $i ++;

		    $dest = $dossier.'/'.$filename;
		    // on copie le fichier dans le dossier de destination
		    if(!move_uploaded_file($tmp_file, $dest))
		    {
		        exit("Impossible de copier le fichier dans $dossier");
		        echo $_FILES['img']['error'];
		    }

		    $ajout = $db->prepare('INSERT INTO youtubers(nom, data) VALUES ("'.$filename.'", "'.$dest.'", '.$_POST['seance'].')');
		    $ajout_e = $ajout->execute();
		    $ajoutOk = true;
		}
	}
?>
        <?php if($ajoutOk) { ?>
        	<div class="alert alert-success">Les photos ont bien été enregistrées.</div>
        <?php } ?>