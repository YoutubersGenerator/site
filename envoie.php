<form method='POST' enctype='multipart/form-data'>
	<label>5 fichiers max</label>
	<input name="file[]" type='file' multiple='multiple'>
	<input type='submit' value='uploader'>
</form>
<?php
	try {
		$bdd = new PDO('mysql:host=localhost;dbname=ytbgen;charset=utf8', 'root', '');
	}
	catch (Exception $e){
	        die('Erreur : ' . $e->getMessage());
	}
	if(isset($_FILES['file'])){
		$files = $_FILES['file'];
		for($i=0; $i<count($files); $i++){
			if(isset($files['name'][$i])){
				$name = substr($files['name'][$i], 0, 3);
				$chemin = 'audio/'.$name.'.mp3';
				$id = attr_id($name);
				$req = $bdd->prepare('INSERT INTO ytb(nom, id) VALUES(:nom, :id)');
				$req->execute(array(
					'nom' => $name,
					'id' => $id
				));

				var_dump($chemin);
				move_uploaded_file($_FILES['file']['tmp_name'][$i], $chemin);
			}
		}
	}
	function attr_id($nom){
		$l = 1;
		while (file_exists('audio/'.$nom.'/'.$nom.'_'.$l.'.mp3')) {
			$l++;
		}
		return $l;
	}
	?>