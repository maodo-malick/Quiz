<?php
$message="";
if(isset($_POST["submit"]))
{
    var_dump($_POST["submit"]);
    $login=$_POST["login"];
    $pass=$_POST["password"];
    $verify=connexion($login,$pass);
    if($verify)
    {
        $message="Login ou mot de pass incorrecte";
    }
    else{
        header("Location:index.php?lien".$verify);
    }
}
?>
            <div id="form">
                <div class="entete">
                    <div class="titre">Login Form</div>
                </div>
                <div class="corps">
                    <form method="POST" action="" id="form-action">
                        <div class="input">
                            <div class="icone icone-icone1"></div>
                            <input type="text" name="login" class="form-controle" errors="errors-1" id="error-1" placeholder="Login">
                            <div class="errors" id="error-1"></div>
                        </div>
                        <div class="input">
                            <div class="icone icone-icone2"></div>
                            <input type="password" name="password" class="form-controle" errors="error2" id="error2" placeholder="Password">
                            <div class="errors" id="error2"></div>
                        </div>
                        <div class="input">
                            <button type="submit" class="bton" name="submit">Connexion</button>
                            <a href="inscription.php" class="link">S'inscrire pour jouer?</a>
                        </div>
                    </form>
                </div>
          </div> 
<script>
    const inputs=document.getElementsByTagName("input");
    for(input of inputs)
    {
        input.addEventListener("keyup",function(e){
            if(e.target.hasAttribute("error")){
                var idDivError=target.getAttribute("error");
            document.getElementById(idDivError).innerText=""}
        })
    }
    document.getElementById("form-action").addEventListener("submit",function(e){
const inputs=document.getElementsByTagName("input");
var error=false;
for (input of inputs)
{
    if(!input.value)
{
    if(input.hasAttribute("error"))
    {
        var idDivError=input.getAttribute("error");
            document.getElementById(idDivError).innerText="Ce champ estobligatoire";
            error=true;
        }
        
    }

   
}
if(error)
{
e.preventDefault()
    return false;
}
    })
   
</script>