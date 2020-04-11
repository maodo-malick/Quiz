<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="Page.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST" action="">
    <div id="table">
       <div id="debut">
        <div id="quiz">
        <img src="quiz.jpeg "alt="bonhomme">
        </div>
        <h3>Le plaisir de jouer</h3>
       </div>
        <div id="base">
            <div id="onclick">
            <h4>Login Form</h4>
            </div>
            <div id="form">
                <div id="first">
                    <input type="text" name="login" placeholder="Login" require>
                    <div class="imag">
                    <img src="icone-user.png" alt="">
                    </div>
                </div>
                <div id="second">
                  <input type="text" name="login" placeholder="password" require>
                    <div class="imag">
                    <img src="icone-password.png" alt="">
                    </div>
                </div>
                <div id="trois">
                    <input type="submit" name="connect" value="Connexion">
                    <p>S'inscrire pour jouer?</p>
                </div>
                  
        </div>
    </div>
    </form>
</body>
</html>
<?php 
$file=  file_get_contents("Quiz.json");

$files=json_decode($file);
$Admin = $files->{"Admin"};
$Gamers=$files->{"Joueur"};
if(isset($_POST))
?>