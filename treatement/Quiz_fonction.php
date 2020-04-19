<?php
function test_vide($a)
{
    return !(empty($a));

}
function connexion($login,$password)
{
    $user=getData();
    foreach ($user as $key => $utilisateur) {
        if ($utilisateur["login"]==$login && $utilisateur["password"]===$password ) {
            $_SESSION["utilisateur"]=$utilisateur;
            $_SESSION['statut']="log-in";
            if($utilisateur["profile"]==="admin")
            {
                return "accueil";
            }
            else
            {
                return "jeux";
            }
            # code...
        }
        
        # code...
    }
    return "error";
}
function deconnexion(){
    unset($_SESSION['utilisateur']);
    unset($_SESSION['statut']);
    session_destroy();

}
function getData($files="Quiz")
{
    $data=file_get_contents("treatement/".$files.".json");
    return $data =json_decode($data,true);
    
}
function is_connect()
{
    if(!isset($_SESSION['statut']))
    {
        header("Location:index.php");
    }
}
?>
