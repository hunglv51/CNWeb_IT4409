<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Lab3-2-ex2</title>
</head>	
<body>
	<?php 
		 function Display($name,$day,$month,$year)
		{
			echo "<br>Name: $name. Birthday: ".date("l, F d, Y",mktime(0,0,0,$month,$day,$year));	
			$now = date("Y",time());
			$born = date("Y",mktime(0,0,0,$month,$day,$year));
			echo "<br>Age: ".($now - $born);
		}
		function Calculate($fday,$fmonth,$fyear,$sday,$smonth,$syear)
		{
			$date1 = mktime(0,0,0,$fmonth,$fday,$fyear);
			$date2 = mktime(0,0,0,$smonth,$sday,$syear);
			$diff = ($date1 > $date2) ? ($date1 - $date2) : ($date2 - $date1);
			printf ("<br>Different day: %.0f",($diff / 1 / 60 / 60 / 24));
			printf ("<br>Different year: %.0f",($diff / 1 / 60 / 60 / 24 / 365));
		}
	 ?>
	<form action="lab3-2-ex2.php" method="post">
		<table>
		<tr>
			<td>1<sup>st</sup> name</td>
			<td><input type="text" name="fname"></td>
			<td>Birthday</td>
			<td><input type="number" min="1" max="31"  name="fday" value="1"></td>
			<td><input type="number" min="1" max="12" p name="fmonth" value="1"></td>
			<td><input type="number" min="0" max="3000"  name="fyear" value="2018"></td>

		</tr>
		<tr>
			<td>2<sup>nd</sup> name</td>
			<td><input type="text" name="sname"></td>
			<td>Birthday</td>
			<td><input type="number" min="1" max="31"  name="sday" value="1"></td>
			<td><input type="number" min="1" max="12"  name="smonth" value="1"></td>
			<td><input type="number" min="0" max="2018"  name="syear" value="2018"></td>
		</tr>
		<tr>
			<td><input type="submit"></td>
			<td><input type="reset"></td>
		</tr>
	</table>
	</form>
	<?php 
		if(!empty($_POST["fname"]) && !empty($_POST["sname"]))
		{
			if(checkdate($_POST["fmonth"],$_POST["fday"],$_POST["fyear"]) && checkdate($_POST["smonth"],$_POST["sday"],$_POST["syear"]))
			{
		{
			Display($_POST["fname"],$_POST["fday"],$_POST["fmonth"],$_POST["fyear"]);
			Display($_POST["sname"],$_POST["sday"],$_POST["smonth"],$_POST["syear"]);
			Calculate($_POST["fday"],$_POST["fmonth"],$_POST["fyear"],$_POST["sday"],$_POST["smonth"],$_POST["syear"]);

		}
			}
			else
			{
				echo "<br>Your dates are invalid";
			}
		}
		else
		{
			echo "Please enter names";
		}

	 ?>
</body>
</html>