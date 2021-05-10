<html>
<head>
	<title>Math</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php
	if(!isset($_SESSION)){ 
				session_start(); 
			}
	$jawab = $_POST['jawaban'];
	$kunci = $_SESSION['hasil'];
	
	if($_SESSION['lives'] >= 2){
		header("Location: over.php");
	} else if($jawab == $kunci){
		echo"Jawaban anda benar! ";
		$_SESSION['x'] = 50 + $_SESSION['score'];
	} else{
		echo "Jawaban anda salah!";
		$_SESSION['y'] = 1 + $_SESSION['lives'];
	}
	?>
	<form method="post" action="math.php">
	<input type="submit" value="Next">
</body>
</html>