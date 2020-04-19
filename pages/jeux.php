<?php 
is_connect();
echo $_SESSION['utilisateur']['nom'];
echo $_SESSION['utilisateur']['prenom'];
echo $_SESSION['utilisateur']['login'];
echo $_SESSION['utilisateur']['profile'];
echo $_SESSION['utilisateur']['photo'];
?>
<br />
<a href="index.php"?statut=logout></a>