<div class="midle">
       <div class="tableau">
           <div class="action">
           <button type="submit" name="deconnect" id="">Déconnexion</button>
           </div>
           <div class="consigne"><h3>CRÉER ET PARAMETRER VOS QUIZZ</h3></div>   
      </div>
      
      <div class="sider">
          <div class="user_pic">
						<div class="photo">
								<img src="public/images/img5.jpg" alt="user-img" >
                            </div>
                <span class="name" > Nom et Prenom</span>
          </div>
          <a href="index.php?lien=acceuil&j=lister">
          <div class="icone1">
          <div class="lien">
              <h4>Liste Question</h4>
              </div>
              <div class="icone-1">
              <img src="public/icones/liste1.png" alt="liste">
              </div>
         </div>
          </a>
          <a href="index.php?lien=acceuil&j=inscription">
        <div class="icone2">
        <div class="lien">
              <h4>Créer admin</h4>
              </div>
              <div class="icone-2">
              <img src="public/icones/ajout.png" alt="liste">
              </div>
      </div>
      </a>
      <a href="index.php?lien=acceuil&j=liste">
        <div class="icone3">
        <div class="lien">
              <h4>Liste joueurs</h4>
              </div>
              <div class="icone-3">
              <img src="public/icones/liste1.png" alt="liste">
              </div>
      </div>
      </a>
      <a href="index.php?lien=acceuil&j=Question">
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
    $p=isset($_GET["j"]); 
    switch($p)
    {
        case "liste" :include("pages/Joueur.php");
            break;
        case "inscription" :require_once("pages/sinscrire.php");
        break;
        case "Question":require_once("Question.php");
         break;
    case 'lister':
            require_once("pages/jeux.php");
        # code...
        break;
        
    }
    ?>
      </div>
    </div>
    body
{
    margin: 0px;
    padding: 0px;
}


.midle
{
    
    top: 20%;
    height: 600px;
    margin-top: 10px;
    border: turquoise solid 1px;
}
.text.text{
    color:white;
    font-size: 20px;
    position: absolute;
    top: 25px;
    left: 45%;
    text-align: center;
    font-weight: bold;
}

.action
{
    background-size: 5%;
    height: 30px;
    width: 10%;
    margin-right: 30px;
    float: right;
}

.consigne h3{
    color:white;
    font-size: 20px;
    position: absolute;
    top: 10px;
    left: 35%;
    text-align: center;
    font-weight: bold;
}
.sider
{
    width: 38%;
    height:450px;
    float: left;
    margin-left: 10px;
   
    position: relative;
    margin-top: 90px;
    background: white;
    
    
}
.user_pic
{
    width: 100%;
    float: left;
    position: absolute;
    height: 200px;
    background: rgb(168, 222, 231);
    
}
.photo
{

    width: 40%;
    height: 75%;
    border-radius: 50%;
    margin-left: 30px;
    margin-top: 20px;
    position: absolute;
    border: peru solid 1px;
}
.photo img
{
    width: 90%;
    height: 90%;
  left: 4%;
  top: 4%;
    position: absolute;
}
.icone1
{
    width: 100%;
    height: 50px;
   right: 2%;
    position:absolute;
    top: 50%;
    
}

.icone-1
{
    width: 5%;
    height: 50%;
    float: right;
   
    margin-right: 10px;
    margin-top: 5px;
}
.icone-1 img
{
    width: 100%;
    height: 100%;
}
.lien
{
    width: 60%;
    height: 100%;
    float: left;
    border: blue  1px;
    margin-left: 10px;
    position: absolute;
    text-align: center;
}
.lien h4{
    text-align: center;
    font-weight: bold;
    color: grey;
    font-size: 20px;
    position: absolute;
    left:45px;
    margin-top: 10px;
    
}
.icone2
{
    width: 100%;
    height: 50px;
    right: 2%;
    position:absolute;
    top: 63%;
    
}

.icone-2
{
    width: 5%;
    height: 50%;
    float: right;
    
    margin-right: 10px;
    margin-top: 5px;
}
.icone-2 img
{
    width: 100%;
    height: 100%;
}

.lien1 a{
    text-align: center;
    font-weight: bold;
    color: grey;
    font-size: 20px;
    position: absolute;
    left:45px;
    margin-top: 10px;
    text-decoration: none;
    
}
.icone3
{
    width: 100%;
    height: 50px;
    right: 2%;
    position:absolute;
    top: 76%;
    
}

.icone-3
{
    width: 6%;
    height: 50%;
    float: right;
   
    margin-right: 10px;
    margin-top: 5px;
}
.icone-3 img
{
    width: 100%;
    height: 100%;
}
.icone4
{
    width: 100%;
    height: 50px;
    right: 2%;
    position:absolute;
    top: 85%;
    
}

.icone-4
{
    width: 6%;
    height: 50%;
    float: right;
   
    margin-right: 10px;
    margin-top: 5px;
}
.icone-4 img
{
    width: 100%;
    height: 100%;
}
.right
{
    float: right;
    width: 58%;
    height: 90%;
    background-color: white;
    margin-top: 5px;
    position: absolute;
    left: 40%;
    top: 3%;
    
}