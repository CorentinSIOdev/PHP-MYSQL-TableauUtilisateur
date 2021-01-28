<?php

include('tableutil.php');

$majid = $_POST['id'];
$majlog = $_POST['login'];
$majpass = $_POST['password'];

$req = "UPDATE utilisateur SET login = '$majlog', password = '$majpass' WHERE id = '$majid'";

if (!($result = mysqli_query($conn,$req)))
{
die("Erreur dans la requete: " . mysqli_error($conn));
}
else{
	echo "<p>Utilisateur mis a jours !</p>";
}

?>