<div class="midler">
       <div class="tableau">
            <div class="action">
           <button type="submit" name="deconnect" id="">Déconnexion</button>
           </div>
           <div class="consigne"><h3>CRÉER ET PARAMETRER VOS QUIZZ</h3></div> 
        </div>
     <div class="milieu">
         <div class="left">
          <div class="user_pic">
          <div  class="photo">
        <img src="public/images/img5.jpg" alt="">
          </div>
                <span class="name" > Nom et Prenom</span>
          </div>
          <a href="index.php?lien=accueil&j=lister">
          <div class="icone1">
          <div class="lien">
              <h4>Liste Question</h4>
              </div>
              <div class="icone-1">
              <img src="public/icones/liste1.png" alt="liste">
              </div>
         </div>
          </a>
          <a href="index.php?lien=accueil&j=inscription">
        <div class="icone2">
        <div class="lien">
              <h4>Créer admin</h4>
              </div>
              <div class="icone-2">
              <img src="public/icones/ajout.png" alt="liste">
              </div>
      </div>
      </a>
      <a href="index.php?lien=accueil&j=liste">
        <div class="icone3">
        <div class="lien">
              <h4>Liste joueurs</h4>
              </div>
              <div class="icone-3">
              <img src="public/icones/liste1.png" alt="liste">
              </div>
      </div>
      </a>
      <a href="index.php?lien=accueil&j=Question">
        <div class="icone4">
        <div class="lien">
              <h4>Créer Questions</h4>
              </div>
              <div class="icone-4">
              <img src="public/icones/ajouter.png" alt="liste">
              </div>
      </div>
      </a>
         </div>
         <div class="right">
         <?php
    $p=isset($_GET["j"])?$_GET["j"]:'liste'; 
    switch($p)
    {
        case "liste" :
            require_once("pages/jeux.php");
            break;
        case "inscription" :require_once("pages/sinscrire.php");
        break;
        case "Question":require_once("pages/Question.php");
               break;
    case 'lister':
            require_once("pages/lister.php");
        break;
        default: echo "page inexistante";  
    }
    ?>
     </div>
    </div>
</div>