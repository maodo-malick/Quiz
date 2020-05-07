<?php
include("treatement/Quiz_fonction.php");
$message="";
if(isset($_POST['compte']))
{
    $login=$_POST['login'];
    $pass=$_POST['password'];
    $confirm=$_POST['confirm'];

$test=Verify_data($login);
if ($test== "error") {
    # code...
    $message="Votre login  existe déja";
}
elseif ($pass!= $confirm) {
    # code...
    $message="votre confirmation ne correspond pas á votre mot de pass saisie";
}
else {
    # code...
    if(file_exists("../treatement/Quiz.json"))
    {
  $data=file_get_contents("../treatement/Quiz.json");
  $array_data=json_decode($data,true);
  $tab=array(
      "login"=>$_POST['login'],
      "password"=>$_POST['password'],
      "photo"=>$_POST['choix'],
      "nom"=>$_POST['prenom'],
      "prenom"=>$_POST['nom']
  );
  $array_data[]=$tab;
  $array=json_encode($array_data);
  if(file_put_contents("../treatement/Quiz.json",$array))
  {
      $message="<span>enregistrer avec succes</span>";
  }
  else {
      
    $message="données non enregistrer";
  }
    } 
}
var_dump($test);
var_dump($message);

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="inscription.css">
</head>
<body>
<div id="formulaire">
           <div id="scinder">
               <form id="form-inscription" method="POST">
           <div id="left">
               <div id="text">
                   <h4>S'INSCRIRE</h4>
                   <p>pour tester le niveau de votre culture generale</p>
               </div><br>
               <div id="input">
                   <p>Prenom</p>
                   <input type="text" name="prenom" error="error-1">
                   <div class="error-form" id="error-1"></div>
                   
                   <p>Nom</p>
                   <input type="text" name="nom" error="error-2">
                   <div class="error-form" id="error-2"></div>
                  
                   <p>Login</p>
                   <input type="text" name="login" error="error-3">
                   <div class="error-form" id="error-3"></div>
                   
                   <p>Password</p>
                   <input type="password" name="password" error="error-4">
                   <div class="error-form" id="error-4"></div>
                   
                   <p>Confirm Password</p>
                   <input type="password" name="confirm"  error="error-5">
                   <div class="error-form" id="error-5"></div>
                   
                   <input type="submit" name="compte" value="Créer un compte ">
                   <input type="file" name="choix"  accept="image/*" onchange="loadFile(event)">
                   <script>
                    var loadFile = function(event) {
                        var reader = new FileReader();
                        reader.onload = function(){
                        var output = document.getElementById('output');
                        output.src = reader.result;
                        
                        };
                        reader.readAsDataURL(event.target.files[0]);
                    };
          </script>
               </div>
           </div>
           <div id="right">
           <div id="forpicture" name="picture">
           <img  id= "output" alt="" />
        </div>
           <span style="color: red";><?php echo $message; ?></span>
           </div>
               </form>
               
        </div>
       
 </div>
</body>
</html>
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