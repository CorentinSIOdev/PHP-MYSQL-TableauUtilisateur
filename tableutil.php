<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tableau Utilisateur</title>
<style type="text/css">
<!--
@import url("style.css");
-->
</style>
</head>
<?php

    $conn = mysqli_connect('localhost', 'root', '', 'cinema');
    if ($conn->connect_error) {
        die("Connection failed : " . $conn->connect_error); 
    }

    $req = "SELECT * FROM utilisateur";
    $utilisateurs = mysqli_query($conn, $req) or die (mysqli_error($conn));

?>
<body>
<table id="table" summary="Datapass" border=2>
<?php
    echo 
    "<tr><th> id </th> <th> login </th> <th> password </th> <th> suppr </th> <th> mise a jour </th> </tr>";
    while ($user=mysqli_fetch_array($utilisateurs)) {
        echo "<tr>";
        echo "<td>". $user['id']. "</td>";
        echo "<td>". $user['login']. "</td>";
        echo "<td>". $user['password']. "</td>";
        echo "<td><a href='delete.php?id=".$user['id']."'onClick=\"return confirm('vous etes sur de vouloir supprimer". $user['login'].")\"> Supression de Table </a></td>";
        echo "<td><a href='maj2.php?id=".$user['id']."&login=".$user['login']."&password=".$user['password']."'> Mise a jour de Table </a></td>";
        echo "</tr>";
    }

    
?>
</table>
<p><a href='ajout2.php'>Création d'un utilisateur</a></p><br>
</body>
</html>