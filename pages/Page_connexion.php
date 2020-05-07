<?php

$message="";
if(isset($_POST['submit-action']))
{
   
    $login= $_POST['login'];
    $password= $_POST['password'];
    $verify=connexion($login,$password);
    if($verify=="error")
    {
        $message="Login ou mot de pass incorrecte";
    }
    else{
        header("Location:index.php?lien=".$verify);
    }
}
?>
            <div id="form">
                <div class="entete">
                    <div class="titre">Login Form</div>
                </div>
                <div class="corps">
                    <form method="POST" action="" id="form-connection">
                        <div class="input-form">
                            <div class="icone icone-icone1"></div>
                            <input type="text" class="form-controle" error="error-1" name="login" id="" placeholder="Login">
                            <div class="error-form" id="error-1"></div>
                        </div>
                        <div class="input-form">
                            <div class="icone icone-icone2"></div>
                            <input type="password" class="form-controle"  error="error-2" name="password"  id="" placeholder="Password">
                            <div class="error-form" id="error-2"></div>
                        </div>
                        <div class="input-form">
                            <button type="submit" class="bton" name="submit-action">Connexion</button>
                            <a href="pages/sinscrire.php" class="link">S'inscrire pour jouer?</a>
                        </div>
                    </form>
                </div>
          </div> 
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
    document.getElementById("form-connection").addEventListener("submit",function(e){
       
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