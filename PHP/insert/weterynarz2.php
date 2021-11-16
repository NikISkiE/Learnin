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
			<h2>Zapisy do kliniki</h2>
            <form method="post" action="weterynarz2.php">
                uslugi:<input type="text" name="usluga" placeholder="0-4" /><br />
                rodzaj:<input type="text" name="rodzaj" placeholder="1-2" /><br />
                imie:<input type="text" name="imie" placeholder="Arnold" /><br />
                wlasciciel:<input type="text" name="wlascicel" placeholder="Jan Kowalski" /><br />
                telefon:<input type="text" name="telefon" placeholder="000000000" /><br />
                termin:<input type="text" name="termin" placeholder="2000-10-01" /><br />
                szczepienie:<input type="text" name="szczepienie" placeholder="2016" /><br />
                opis:<input type="text" name="opis" placeholder="Problem z uchem" /><br />
                <input type="submit" />
            </form>
			<?php
							$polacz = mysqli_connect('localhost','root','','weterynarz');
							if(!$polacz){
								echo "błąd połączenia"; 

							}
								@$us = $_POST["usluga"];
								@$rod = $_POST["rodzaj"];
								@$nm = $_POST["imie"];
								@$ow = $_POST["wlascicel"];
								@$ph = $_POST["telefon"];
								@$dt = $_POST["termin"];
								@$in = $_POST["szczepienie"];
								@$des = $_POST["opis"];
								$zap3 = 'INSERT INTO zwierzeta VALUES (null,"'.$us.'","'.$rod.'","'.$nm.'","'.$ow.'","'.$ph.'","'.$dt.'","'.$in.'","'.$des.'")';
								if(mysqli_query($polacz,$zap3)){
									echo "Dodano dane do tabeli";
								}else{
									echo "wystąpił problem podczas próby dodania danych";
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