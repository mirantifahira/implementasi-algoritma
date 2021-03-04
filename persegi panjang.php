<!DOCTYPE html>
<!--menghitung luas persegi panjang -->
<html>
	<head>
		<title>menghitung luas persegi panjang</title>
		<h2>Menghitung Luas Persegi Panjang</h2>
	</head>
	<body>
		<form action="" method="post">
			<table border="1">
			<tr>
				<td>
					Panjang
					<input type="text" name="panjang" placeholder="masukan nilai panjang"><br>
				</td>
			</tr>
			<tr>
				<td>
					Lebar
					<input type="text" name="lebar" placeholder="masukan nilai lebar"><br>
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
		    $panjang  =$_POST['panjang'];
		    $lebar  =$_POST['lebar'];
			$luas_persegi_panjang = $panjang*$lebar;
			echo " Luas Persegi Panjangnya Adalah ".$luas_persegi_panjang;
		}
		?>
	</body>
</html>
