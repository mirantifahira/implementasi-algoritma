<!DOCTYPE html>
<!--menghitung luas segitiga -->
<html>
	<head>
		<title>Menghitung Luas Segitiga</title>
		<h2>Menghitung Luas Segitiga</h2>
	</head>
	<body>
		<form action="" method="post">
		<table border="1">
		<tr>
			<td>
				Alas
				<input type="text" size="10" name="alas" ><br>
			</td>
		</tr>
		<tr>
			<td>
				Tinggi
				<input type="text" size="9" name="tinggi"><br>
			</td>
		</tr>
		<tr>
			<td>
				<center>
					<input type="submit" name="hitung">
				</center>
			</td>
		</tr>
		</table>
		</form>
		<?php
			if(isset($_POST['hitung'])){
			$alas  =$_POST['alas'];
		    $tinggi  =$_POST['tinggi'];
			$luas = (($alas * $tinggi) / 2);
			echo "<br> luas segitiganya adalah ".$luas;
		}
		?>
	</body>
</html>

