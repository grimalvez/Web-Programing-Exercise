<!DOCTYPE html>
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
		if(!isset($_SESSION['x'])){ 
			$_SESSION['x'] = 0; 
		}
		if(!isset($_SESSION['y'])){ 
			$_SESSION['y'] = 0; 
		}
		$angka1 = rand(0, 20);
		$angka2 = rand(0, 20);
		$hasil = $angka1 + $angka2;
		$_SESSION['hasil'] = $hasil;
		
		$y = $_SESSION['y'];
		$_SESSION['lives'] = 0 + $y ;
		$lives = 3 - $y;
		
		$x = $_SESSION['x'];
		$_SESSION['score'] = 0 + $x ;
		$score = $_SESSION['x'];
		
		$name = $_SESSION['name'];
		echo "<p>Hallo $name, semangat mengerjakan!!</p>";
		echo "<p>Lives : $lives | Score : $score</p>";
		echo"<br>";
		echo "<p>Berapa hasil dari $angka1 + $angka2 ?  </p><br>";
	?>
	<form action="check.php" method="post">
	<input type="text" name="jawaban">
	<input type="submit" name="submit" value="submit">
	</form>
</body>
</html>