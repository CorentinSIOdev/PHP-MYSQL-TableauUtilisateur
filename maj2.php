<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	</head>
	<body>
	<?php
	
    $conn = mysqli_connect('localhost', 'root', '', 'cinema');
    if ($conn->connect_error) {
        die("Connection failed : " . $conn->connect_error); 
    }

$majid = $_GET['id'];
$majlog = $_GET['login'];
$majpass = $_GET['password'];

$req = "SELECT id, login, password FROM utilisateur WHERE id = '$majid'";
$utilisateurs = mysqli_query($conn, $req) or die (mysqli_error($conn));
$row = mysqli_fetch_array($utilisateurs);
		?>
		<h1>Mis a jours un utilisateur</h1>
		<form method="post" action="maj.php">
			<br>
			<label>Nouveau ID</label> <input type="text" name="id" value="<?php echo $row['0']; ?>">
			<label>Nouveau Login</label> <input type="text" name="login" value="<?php echo $row['1']; ?>">
			<label>Nouveau Password</label> <input type="text" name="password" value="<?php echo $row['2']; ?>">
			<input type="submit" value="Mise a jour">
		</form>
	</body> 
</html>