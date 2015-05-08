<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" class="text/css" href="style.css" meddia="all"/>
        <title>Youtubers Generator !</title>
        <script src="jquery-2.1.3.min.js"></script>
        <script type="text/javascript" src="custom.js"></script>
        <script type="text/javascript" src="soundmanager2.js"></script>
        <script type="text/javascript" src="inlineplayer.js"></script>
    </head>
    <body>
        <?php
            function search($nom){
                require('connexion_bdd.php');
                $search = $bdd->prepare("SELECT id FROM ytb WHERE nom = :nom");
                $search -> execute(array('nom' => $nom));
                $result = $search -> fetchAll();
                return $result;
            }
        ?>
        <span id="s1"></span>
        <span id="s2"></span>
        <!-- La navigation -->
            <a href="#s2" id="nav"><img src="img/ytplay.png"/></a>
        <!-- Le gros conteneur qui va glisser -->
        <div id="wrap">
            <!-- La slide 1 -->
            <div id="slide1">
                <div class="slide_inside">
                    <!-- Le logo -->
                    <img src="img/bandeau.png" id="bandeau" alt="youtubers generator">
                </div> <!-- /.slide_inside-->	 	
            </div> <!-- /#slide1 -->

            <!-- La slide 2 -->
            <div id="slide2">
                <div class="slide_inside">
                    <div id="content">
                        <a href="#s1"><img src="img/return.png" alt="return" id="return"></a>
                        <div id='search'>
                            <form method="POST">
                                <input type ='text' name='research' placeholder='recherche'>
                                <input type='submit' value='Rechercher'>
                            </form>
                        </div>
                        <div id="contentBubble">
                            <div class="bubble">
                                <a href='audio/slg/<?php $id=search('slg'); echo 'slg_'.$id[0]['id'].'.mp3' ?>'><img src="img/old/SLG.jpg"/></a>
                            </div>
                            <div class="bubble">
                                <a href='audio/mip/<?php $id=search('mip'); echo 'mip_'.$id[0]['id'].'.mp3' ?>'><img src="img/old/mip.jpg"/></a>
                            </div>
                            <div class="bubble">
                                <a href="audio/jdg/<?php $id=search('jdg'); echo 'jdg_'.$id[0]['id'].'.mp3' ?>"><img src="img/old/jdg.jpg"/></a>
                            </div>
                            <div class="bubble">
                                <a href='audio/ant/<?php $id=search('ant'); echo 'ant_'.$id[0]['id'].'.mp3' ?>'><img src="img/old/antoine-daniel.jpg"/></a>
                            </div>
                            <div class="bubble">
                                <a href='audio/ben/<?php $id=search('ben'); echo 'ben_'.$id[0]['id'].'.mp3' ?>'><img src="img/old/benzai.png"/></a>
                            </div>
                            <div class="bubble">
                                <a href='audio/bob/<?php $id=search('bob'); echo 'bob_'.$id[0]['id'].'.mp3' ?>'><img src="img/old/BobLennon.png"/></a>
                            </div>
                            <div class="bubble">
                                <a href='audio/cos/<?php $id=search('cos'); echo 'cos_'.$id[0]['id'].'.mp3' ?>'><img src="img/old/Connasse.jpg"/></a>
                            </div>
                            <div class="bubble">
                                <a href='audio/cyp/<?php $id=search('cyp'); echo 'cyp_'.$id[0]['id'].'.mp3' ?>'><img src="img/old/cyprien.png"/></a>
                            </div>
                        </div>
                        <div id="footer">
                            <h3>Created by :</h3>
                            <p>Benjamin Wagner et Amaïa Hiribarne. Tous droits réservés.</p>
                        </div>
                    </div>                   
                </div> <!-- /.slide_inside-->	     	
            </div> <!-- /#slide2 -->
        </div>
        <?php 
            if(isset($_POST['research'])){
                $nom = substr($_POST['research'], 0, 3);
                if ($_POST['research'] == 'slg' || stristr($_POST['research'], 'geek') != false) {
                    header('location: slg.php');
                } elseif ($_POST['research'] == 'jdg' || stristr($_POST['research'], 'grenier') != false) {
                    header('location: jdg.php');
                } elseif ($_POST['research'] == 'minutte papillon' || stristr($_POST['research'], 'minute') != false) {
                    header('location: mip.php');
                } elseif ($_POST['research'] == 'antoine daniel' || $_POST['research'] == 'wtc' || stristr($_POST['research'], 'cut') != false) {
                    header('location: ant.php');
                } elseif ($_POST['research'] == 'benzai' || stristr($_POST['research'], 'corner') != false) {
                    header('location: ben.php');
                } elseif ($_POST['research'] == 'bob lennon' || stristr($_POST['research'], 'bob') != false) {
                    header('location: bob.php');
                } elseif ($_POST['research'] == 'connasse' || stristr($_POST['research'], 'con') != false) {
                    header('location: cos.php');
                } elseif ($_POST['research'] == 'cyprien' || stristr($_POST['research'], 'cyp') != false) {
                    header('location: cyp.php');
                }
            }
        ?>
    </body>
</html>