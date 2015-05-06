<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title></title>
</head>
<body>
    <form method="post" enctype="multipart/form-data">
        <input type="file" name="fichiers"><br>
        <button type="submit" name='envoyer'>Envoyer :p</button>
    </form>
    <?php 
    if (isset($_POST['envoyer'])){
        $fichiers = $_FILES["fichiers"]['name'];
        echo strrpos($fichiers, '.').'<br>';
        $name = substr($fichiers, 0, strrpos($fichiers, '.'));
        echo $fichiers.'<br>';
        echo $name.'<br>';
        $dest = 'audio/'.$name;
        echo $dest;
    }
    ?>
</body>
</html>