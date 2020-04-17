<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="acceuil.css">
    <title>Acceuil</title>
</head>
<body>
    <div class="plan">
    <div class="top">
        <div class="toff"></div>
        <div class="text">Le plaisir de jouer</div>
    </div>
    <div class="midle">
       <div class="tableau">
           <div class="action">
           <button type="submit" name="deconnect" id="">Déconnexion</button>
           </div>
           <div class="consigne"><h3>CRÉER ET PARAMETRER VOS QUIZZ</h3></div>   
      </div>
      <aside class="my_side">
      <div class="sider">
          <div class="user_pic">
						<div class="photo">
								<img src="img5.jpg" alt="user-img" >
                            </div>
                <span class="name" > Nom et Prenom</span>
          </div>
          <a href="">
          <div class="icone1">
          <div class="lien">
              <h4>Liste Question</h4>
              </div>
              <div class="icone-1">
              <img src="liste1.png" alt="liste">
              </div>
         </div>
          </a>
          <a href="Quizz/sinscrire.phpj=Crée admin">
        <div class="icone2">
        <div class="lien">
              <h4>Créer admin</h4>
              </div>
              <div class="icone-2">
              <img src="ajout.png" alt="liste">
              </div>
      </div>
      </a>
      <a href="">
        <div class="icone3">
        <div class="lien">
              <h4>Liste joueurs</h4>
              </div>
              <div class="icone-3">
              <img src="liste1.png" alt="liste">
              </div>
      </div>
      </a>
      <a href="">
        <div class="icone4">
        <div class="lien">
              <h4>Créer Questions</h4>
              </div>
              <div class="icone-4">
              <img src="ajouter.png" alt="liste">
              </div>
      </div>
      </a>
      </div>
      </aside>
      <div class="right">
      <?php
        include("Quizz/content.php");?>
      </div>
    </div>
</body>
</html>