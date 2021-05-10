<html>
<head>
	<title>Game Over</title>
	<style>
	* {
		margin: 5px;
		padding: 5px;
		font-family: 'JetBrains Mono', monospace;
	}

	table, th, td {
		border: 1px solid black;
		text-align: center;
		padding: 0;
	}
	table{
		width:60% ;
	}
	th, td{
		width:10%
	}
	h2{
		text-align:center;
		width:60% ;
	}
	</style>
</head>
<body>
	<?php
	if(!isset($_SESSION)){ 
				session_start(); 
			}
	$name = $_SESSION['name'];
	$score = $_SESSION['x'];
	$fp = fopen('score.dat','a');
	fwrite($fp, "$name,$score\n");
	fclose($fp);
	echo "<p>Halo $name, nyawa anda sudah habis!!<br></p>";
	echo "<p>Score anda : $score </p>";
	echo "<h2>Score Board</h2>";
	
	echo"<table>";
	echo"<tr>";
	echo"<th>No</th>";
	echo"<th>Nama</th>";
	echo"<th>Score</th>";
	echo"</tr>";
	
	$no = 0;
	$file = fopen("score.dat","r");
	while (!feof($file)){
		$myfile = fgets($file);
		if(empty($myfile)){ 
				break; 
			}
		$x = explode(",", "$myfile");
		$no = $no + 1;
		array_push($x, $no);
		
		echo "<tr>";
		echo "<td>$x[2]</td>";
		echo "<td>$x[0]</td>";
		echo "<td>$x[1]</td>";
		echo "</tr>";
	}
	
	echo"</table>";
	echo "<a href=index.html>Kembali<br></a>";
		session_destroy();
	?>
</body>
</html>