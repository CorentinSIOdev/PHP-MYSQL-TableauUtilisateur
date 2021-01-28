<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<h1>Ajouter un contact</h1>
		<?php
        $log = $_POST['login'];
        $pass = $_POST['password'];
		include('tableutil.php');
		$req= "INSERT INTO utilisateur (login, password) VALUES ('$log', '$pass');";
		$result = mysqli_query($conn, $req);
		if ($result) {
			echo "<p>Le contact a été ajouté</p>";
        } else {
            echo "<p>Erreur</p>";
        }
		?>
	</body> 
</html>