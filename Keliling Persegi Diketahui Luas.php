<!DOCTYPE html>
<!--menghitung keliling persegi yang diketahui luas-->
<html>
	<head>
		<title>menghitung keliling persegi yang diketahui luas</title>
		<h2>Menghitung Keliling Persegi Yang Diketahui Luas</h2>
	</head>
	<body>
		<form action="" method="post">
			<table border="1">
			<tr>
				<td>
					Luas
					<input type="text" name="luas" placeholder="masukan nilai luas"><br>
				</td>
			</tr>
			<tr>
				<td>
					Sisi
					<input type="text" name="sisi" placeholder="masukan nilai sisi"><br>
				</td>
			</tr>
			<tr>
				<td>
					<input type="submit" name="hitung" value="hitung">
				</td>
			</tr>
		</table>
		</form>
		<?php
			if(isset($_POST['hitung'])){
		    $luas  =$_POST['luas'];
		    $sisi  =$_POST['sisi'];
			$hitungsisi = $luas / 2;
			$keliling_persegi = 4 * $hitungsisi;
			echo " Keliling Persegi Adalah ".$keliling_persegi;
		}
		?>
	</body>
</html>