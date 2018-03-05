<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Lab 3-2 Ex1</title>
</head>
<body>
	<form action="lab3-2-ex1.php" method="post">
		<table>
			<tr>
				<td>Radians</td>
				<td><input type="text" name="radian" 
					<?php 
						if  (!empty($_POST["degree"]))
							echo 'value = "'.deg2rad($_POST["degree"]).'"';
					?> 
					></td>
			</tr>
			<tr>
				<td>Degrees</td>
				<td><input type="text" name="degree"
					<?php 
						if  (!empty($_POST["radian"]))
							echo 'value = "'.rad2deg($_POST["radian"]).'"';
					?> 
					></td>
			</tr>
			<tr>
				<td><input type="submit"></td>
				<td><input type="reset"></td>
			</tr>
		</table>		
	</form>
</body>
</html>