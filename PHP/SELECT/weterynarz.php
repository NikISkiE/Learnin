<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Weterynarz</title>
		<link rel="stylesheet" href="weterynarz.css">
	</head>
	<body>
		<header>
			<h1>GABINET WETERYNARYJNY</h1>
		</header>
		<section id="lewy">
			<h2>PSY:</h2>
			<?php
				$conn=mysqli_connect('localhost','root','','weterynarz');
				$qst1="SELECT id,imie,wlasciciel FROM zwierzeta WHERE rodzaj=1;";
				$ask1=mysqli_query($conn,$qst1);
				while($row1=mysqli_fetch_array($ask1)){
					echo $row1["id"]." ".$row1["imie"]." ".$row1["wlasciciel"]."</br>";
				}
			?>
			<h2>KOTY:</h2>
			<?php
				$qst2="SELECT id,imie,wlasciciel FROM zwierzeta WHERE rodzaj=2;";
				$ask2=mysqli_query($conn,$qst2);
				while($row2=mysqli_fetch_array($ask2)){
					echo $row2["id"]." ".$row2["imie"]." ".$row2["wlasciciel"]."</br>";
				}
			?>
		</section>
		<section id="srodek">
			<h2>SZCZEGÓŁOWA INFORMACJA O ZWIERZĘTACH</h2></br>
				<?php
					$qst3="SELECT imie,telefon,szczepienie,opis FROM zwierzeta;";
					$ask3=mysqli_query($conn,$qst3);
					while($row3=mysqli_fetch_array($ask3)){
						echo "Pacjent: ".$row3["imie"]."</br>Telefon właściciela: ".$row3["telefon"].", ostatnie szczepienie: ".$row3["szczepienie"].", informacje: ".$row3["opis"]."</br><hr>";
					}
				?>
		</section>
		<section id="prawy">
			<h2>WETERYNARZ</h2>
			<a href="logo.jpeg"><img src="logo-mini.jpg"/></a></br>
			<b><p>Krzysztof</br>Nowakowski,</br>lekarz</br>weterynarii</p></b>
			<h2>GODZINY PRZYJĘĆ</h2>
			<table>
				<tr>
					<td>Poniedziałek</td>
					<td>15:00-19:00</td>
				</tr>
				<tr>
					<td>Wtorek</td>
					<td>15:00-19:00</td>
				</tr>
			</table>
		</section>
	</body>
</hmtl>