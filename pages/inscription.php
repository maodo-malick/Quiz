<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./inscription.css">
</head>
<body>
<div id="table">
       <div id="debut">
        <div id="quiz">
        <img src="../images/quiz.jpeg "alt="bonhomme">
        </div>
        <h3>Le plaisir de jouer</h3>
       </div>
       <div id="formulaire">
          
           <div id="scinder">
           <form id="form-inscription">
           <div id="left">
               <div id="text">
                   <h1>S'INSCRIRE</h1>
                   <p>pour tester le niveau de votre culture generale</p>
               </div>
               <div id="input">
                   <p>Prenom</p>
                   <input type="text" name="prenom"  error="error-5">
                   <div class="error-form" id="error-5"></div>
                   <br>
                   <p>Nom</p>
                   <input type="text" name="nom"  error="error-4">
                   <div class="error-form" id="error-4"></div>
                   <br />
                   <p>Login</p>
                   <input type="text" name="login" id="error-3" error="error-3">
                   <div class="error-form" id="error-3"></div>
                   <br/>
                   <p>Password</p>
                   <input type="password" name="password"  error="error-1">
                   <div class="error-form" id="error-1"></div>
                   <br>
                   <p>Confirm Password</p>
                   <input type="password" name="confirm"  error="error-2">
                   <div class="error-form" id="error-2"></div>
                   <br />
                   <button type="submit" name="compte" >Créer un compte</button>
                   <button type="file" name="choix" >Choisir un fichier</button>
               </div>
           </div>
           <div id="right">
           <div id="forpicture" name="picture"><p>Acceuillir une photo</p></div>
           </div>
           </form>
        </div>
           
 </div>
</body>
</html>
<script>
    const inputs=document.getElementsByTagName("input");
    for(input of inputs)
    {
        input.addEventListener("keyup",function(e){
            if(e.target.hasAttribute("error"))
            {
                var idDivError=e.target.getAttribute("error");
                document.getElementById(idDivError).innerText=""
            }
        })
    }
    document.getElementById("form-inscription").addEventListener("submit",function(e){
       
       const inputs =document.getElementsByTagName("input");
       var error=false;
       for(input of inputs)
       {
        if(input.hasAttribute("error")){
           var idDivError=input.getAttribute("error")
           if(!input.value)
           {
              
                   
                   document.getElementById(idDivError).innerText="Ce champ est obligatoire";
                   error=true;
               }
              
           }
          
       }
       if(error)
       {
        e.preventDefault();
        return false;
       }
       
    })
</script> 