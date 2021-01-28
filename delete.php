<?php

include('tableutil.php');

$delete = $_GET['id'];


$req = "DELETE FROM utilisateur WHERE id ='$delete'";

    if (!($result = mysqli_query($conn,$req)))
    {
        die("Erreur dans la requete: " . mysqli_error($conn));
    }
    else{
        echo "<p>Utilisateur supprimé</p>";
    }

?>
<a href=tableutil.php> Retourner a la liste</a> 