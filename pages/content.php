<?php
    $p=isset($_GET["j"])?$_GET["j"]:'Joueur.php'; 
    switch($p)
    {
        case "Joueur.php":include("Joueur.php");
            break;
        case "sinscrire.php":require_once("Quizz/sinscrire.php");
        break;
    break;
        case "Créer Question":include("Quizz/Question.php");
break;
default: echo "Page inexistant";
    }
    ?>