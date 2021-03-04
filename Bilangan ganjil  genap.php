<!DOCTYPE HTML> 
<!-- menentukan bil ganjil / genap --> 
	<html>
		<head>
		</head>
		<body>  
			<h2>Menentukan bilangan Ganjil Genap</h2>

			<form method="post" action="">
				<table border="1px">
					<tr>
						<td>
					  		Bilangan: <input type="text" size="10" name="bilangan">
					  		<br>
					  		<input type="submit" name="submit" value="Submit">
					  	</td>
				  	</tr> 
		  		</table> 
			</form>
			<br>
			<?php

				if ($_SERVER["REQUEST_METHOD"] == "POST") {
					$bilangan = $_POST["bilangan"];
					if ($bilangan % 2 == 0){ 
					    echo "$bilangan Merupakan Bilangan Genap"; 
				}else {
					    echo "$bilangan Merupakan Bilangan Ganjil"; 
				}
			}
		?>
	</body>
</html>