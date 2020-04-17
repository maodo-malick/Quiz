<?php
    $p=isset($_GET["j"])?$_GET["j"]:'Créer admin'; 
    switch($p)
    {
        case "Créer admin":include("Quizz/sinscrire.php");
            break;
        case "Liste Question":include("Quizz/liste.php");
        break;
        case "Liste joueur":include("Quizz/joueur.php");
    break;
        case "Créer Question":include("Quizz/Question.php");
break;
    }
    ?>