<html>
<head>
	<title>Progress</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php
	if(!isset($_SESSION)){ 
				session_start(); 
			}
	if(!isset($_POST["username"])){ 
		header("Location: login.html");; 
	}
	$_SESSION['name'] = $_POST["username"];
	$_SESSION['email'] = $_POST["email"];
	?>
	<p>Hallo <?php echo $_SESSION['name']; ?>, selamat datang kembali di permainan ini!!</p>
	<form method="post" action="math.php">
	<input type="submit" value="Next">
</body>
</html>