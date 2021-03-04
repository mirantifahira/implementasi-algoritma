<!DOCTYPE html>
<!--menghitung Keliling Lingkaran -->
<html>
	<head>
		<title>Menghitung Keliling Lingkaran</title>
		<h2>Menghitung Keliling Lingkaran</h2>
	</head>
	<body>
		<form action="" method="post">
		<table border="1">
			<tr>
				<td>
					Jari-jari
					<input type="text" name="jari" placeholder="masukan nilai jari jari"><br>
					<input type="submit" name="hitung" value="hitung">
				</td>
			</tr>
		</table>
		</form>
		<?php
			if(isset($_POST['hitung'])){
		    $jari  =$_POST['jari'];
			$keliling = ((2* 3.14)*$jari);
			echo " Keliling Lingkarannya Adalah ".$keliling;
		}
		?>
		</form>
	</body>
</html>


