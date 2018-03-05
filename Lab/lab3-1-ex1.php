<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Date Time Validation</title>
</head>
<body>
	<form action="lab3-1-ex1.php" method="post">
		<p>Enter your name and select date and time for the appointment</p>
		<table>
			<tr>
				<td>Your name: </td>
				<td><input type="text" name="uname"></td>
			</tr>
			<tr>
				<td>Date</td>
				<td>
					<select name="date" id="date">
						<?php 
							for ($i=1; $i < 32; $i++) { 
								echo '<option value="'.$i.'"'.">$i</option>";
							}
						 ?>
					</select>
					<select name="month" id="month">
						<?php 
							for ($i=1; $i < 13; $i++) { 
								echo '<option value="'.$i.'"'.">$i</option>";
							}
						 ?>
					</select>
					<select name="year" id="year">

						<?php 
							for ($i=1900; $i < 2101; $i++) { 
								echo '<option value="'.$i.'"'.">$i</option>";
							}
						 ?>
					</select>
				</td>
			</tr>
			<tr>
				<td>Time</td>
				<td>
					<select name="hour" id="hour">
						<?php 
							for ($i=0; $i < 24; $i++) { 
								echo '<option value="'.$i.'"'.">$i</option>";
							}
						 ?>
					</select>
					<select name="minute" id="minute">
						<?php 
							for ($i=0; $i < 60; $i++) { 
								echo '<option value="'.$i.'"'.">$i</option>";
							}
						 ?>
					</select>
					<select name="second" id="second">
						<?php 
							for ($i=0; $i < 60; $i++) { 
								echo '<option value="'.$i.'"'.">$i</option>";
							}
						 ?>
					</select>
				</td>
			</tr>
			<tr>
				<td><input type="submit"></td>
				<td><input type="reset"></td>
			</tr>
		</table>
	</form>
	<?php 
	
		if(!empty($_POST["uname"]) && !empty($_POST["date"]) && !empty($_POST["month"]) && !empty($_POST["year"]) && !empty($_POST["hour"]) && !empty($_POST["minute"]) && !empty($_POST["second"]))
		{
			$date = $_POST["date"];
			$month = $_POST["month"];
			$year = $_POST["year"];
			$hour = $_POST["hour"];
			$minute = $_POST["minute"];
			$second = $_POST["second"];
			echo "<br>Hi ".$_POST["uname"].'!';
			echo "<br>You have choose to have an appointment on $hour:$minute:$second, $date/$month/$year";
			echo "<br>More information";
			$time = ($hour > 12) ? "PM" : "AM";
			$hour = ($hour > 12) ? $hour - 12 : $hour;
			$days = 0;
			echo "<br>In 12 hours, the time and date is $hour:$minute:$second $time, $date/$month/$year";
			switch ($month) {
				case '4':
				case '6':
				case '9':
				case '11':
					$days = 30;
					break;
				case '2':
					if(($year % 400 == 0) || (($year % 100 != 0) && ($year % 4 == 0)))
						$days = 29;
					else 
						$days = 28;
					break;
				default:
					$days = 31;
					break;
			}
			echo "<br>This month has $days days!";

		}
	 ?>
</body>
</html>