<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<title>Portal Ogłoszeniowy</title>
		<link rel="stylesheet" href="style1.css" />
	</head>

	<body>
		<header>
			<h1>Portal ogłoszeniowy</h1>
		</header>
		<article>
			<h2>Kategorie ogłoszeń</h2>
			<ol>
				<li>Książki</li>
				<li>Muzyka</li>
				<li>Filmy</li>
			</ol>
			<img src="ksiazki.jpg" alt="Kupię / sprzedam książkę" />
			<table>
				<tr>
					<th>Lista ogłoszeń</th>
					<th>Cena ogłoszenia</th>
					<th>Bonus</th>
				</tr>
				<tr>
					<td>1 - 10</td>
					<td>1 PLN</td>
					<td rowspan="3">Subskrypcja newslettera to upust 0,20 PLN na ogłoszenie</td>
				</tr>
				
				<tr>
					<td>11 - 50</td>
					<td>0,80 PLN</td>

				</tr>
				<tr>
					<td>51 i więcej</td>
					<td>0,60 PLN</td>

				</tr>
			</table>

		</article>
		<aside>
			<h2>Ogłoszenia kategorii książki</h2>
			<?php
			$query1="SELECT `id`,`tytul`,`tresc` FROM `ogloszenie` WHERE kategoria = 1";
			$query2="SELECT telefon FROM `uzytkownik` LEFT JOIN ogloszenie ON uzytkownik.id = ogloszenie.uzytkownik_id WHERE kategoria = 1";//left join WAŻNE!!! Sklejanie dwóch tabel.
			$conn=mysqli_connect("localhost","root","","ogloszenia");
			   $z = mysqli_query($conn,$query1);
			   $x = mysqli_query($conn,$query2);
			while (($t1 = mysqli_fetch_array($z))&&($t2 = mysqli_fetch_array($x))){
				echo "<h3>".$t1[0]." ".$t1[1]."</h3><p>".$t1[2]."<p/><p>Telefon kontaktowy: ".$t2[0]."</p>";
			}
			mysqli_close($conn);
			?>
		</aside>
		<footer>Portal ogłoszeniowy opracował: Dominik Bonisławski</footer>
	</body>
</html>
