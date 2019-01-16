<?php

require_once('create.php');
require_once('save.php');


$req = $bdd->query('SELECT * FROM film');


                     
         if ( isset($_GET['film']) && intval($_GET['film'] > 0) ){

         $liste = getFilm($_GET['list']);
         }
