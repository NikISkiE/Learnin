<!DOCTYPE html>

<html lang="pl">
	<head>
		<meta charset="utf-8" />
		<title></title>
		<link rel="stylesheet" type="text/css" href="weterynarz.css" />
	</head>
	<body>
		
		<section id="header">
			<h1>GABINET WETERYNARYJNY</h1>
		</section>
		
		<section id="left">
			<h2>PSY</h2>
			<?php
					$polacz = mysqli_connect('localhost','root','','weterynarz');
					$zap1 = "SELECT id,imie,wlasciciel FROM zwierzeta WHERE rodzaj=1";
					$wynikzap1 = mysqli_query($polacz,$zap1);
					while($row = mysqli_fetch_array($wynikzap1)) {
						echo $row[0]." ".$row[1]." ".$row[2]."<br>";
					}
					
				?>
			<h2>KOTY</h2>
			<?php
					$polacz = mysqli_connect('localhost','root','','weterynarz');
					$zap2 = "SELECT id,imie,wlasciciel FROM zwierzeta WHERE rodzaj=2";
					$wynikzap2 = mysqli_query($polacz,$zap2);
					while($row2 = mysqli_fetch_array($wynikzap2)) {
						echo $row2[0]." ".$row2[1]." ".$row2[2]."<br>";
					}
				?>
		</section>
		
		<section id="middle">
			<h2>SZCZEGÓŁOWA INFORMACJA O ZWIERZĘTACH</h2>
			<?php
					$polacz = mysqli_connect('localhost','root','','weterynarz');
					$zap3 = "SELECT imie,telefon,szczepienie,opis FROM Zwierzeta";
					$wynikzap3 = mysqli_query($polacz,$zap3);
					while($row3 = mysqli_fetch_array($wynikzap3)) {
						echo "Pacjent: ".$row3[0].", ";
						echo "Telefon właściciela: ".$row3[1].", ";
						echo "ostatnie szczepienie: ".$row3[2].", ";
						echo "informacje: ".$row3[3]."<hr>";
					}
					mysqli_close($polacz);
				?>
		</section>
		
		<section id="right">
			<h2>WETERYNARZ</h2>
			<a href="logo.jpg">
			<img src="logo-mini.jpg">
			</a>
			<p>Krzysztof Nowakowski, lekarz weterynarii</p>
			<h2>GODZINY PRZYJĘĆ</h2>
				
			<table>
				<tr>
					<td>Poniedziałek</td>
					<td>15:00 - 19:00</td>
				</tr>
				<tr>
					<td>Wtorek</td>
					<td>15:00 - 19:00</td>
				</tr>
			</table>
			<center><a href="weterynarz.php"><h2>homepage<h2></a></center>
            <center><a href="weterynarz2.php"><h2>zapisz sie na wizyte<h2></a></center>
		</section>
	</body>
</html>