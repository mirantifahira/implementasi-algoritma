<!DOCTYPE HTML> 
<!-- menentukan kelulusan mahasiswa --> 
	<html>
		<head>
		</head>
		<body>  
			<h2>Menentukan Nilai Kelulusan Mahasiswa</h2>

			<form method="post" action="">
				<table border="1px">
					<tr>
						<td>
					  		Nama: <input type="text"  name="nama"><br>
					  	</td>
				  	</tr>
				  	<tr>
				  		<td>
				  			Nilai: <input type="text"  name="nilai"><br>
				  		</td>
				  	</tr>
				  	<tr>
				  		<td>
				  		<center><input type="submit" name="submit"></center>
				  		</td>
				  	</tr>
		  		</table> 
			</form>
			<br>
			<?php

				if ($_SERVER["REQUEST_METHOD"] == "POST") {
					$nama = $_POST["nama"];
					$nilai = $_POST['nilai'];
						if ($nilai >= 70){ 
					    echo " Nilai $nilai, $nama LULUS"; 
					}else {
					    echo " Nilai $nilai, $nama Tidak Lulus"; 
				}
			}
		?>
	</body>
</html>