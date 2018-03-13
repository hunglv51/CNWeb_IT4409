<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>View List of files</title>
	<style>
		table,th,td
		{
			border: 1px solid black;
			border-collapse: collapse;
		}
	</style>
</head>
<body>
	<form action="lab4-2.php" method="post">
		Sort by: 
		<input type="radio" name="sorttype" value="time">Upload Date
		<input type="radio" name="sorttype" value="size">Size
		<br>
		<input type="submit">
	</form>
	<?php 
	$dirPath = "./upload/";
	$files = scandir($dirPath);
	$times = array();
	$sizes  = array();
	echo '<table>';
	echo '<tr><th>Name</th><th>Upload Date</th><th>Size (bytes)</th></tr>';
	foreach ($files as $key => $value) {
		$times[$key] = filemtime($dirPath.$value);
		$sizes[$key] = filesize($dirPath.$value);
	}
	if(!empty($_POST['sorttype'])){
	if ($_POST['sorttype'] == 'time') {
			asort($times);
			foreach ($times as $key => $value)
			if(($files[$key] != '.') && ($files[$key] != '..'))	
			{
				echo "<tr>";
				echo "<td>$files[$key]</td>";
				echo "<td>".date("F d Y H:i:s",$value)."</td>";
				echo "<td>$sizes[$key]</td>";
				echo "</tr>";
			}
		}
	else if ($_POST['sorttype'] == 'size') {
			asort($sizes);
			foreach ($sizes as $key => $value) 
			if(($files[$key] != '.') && ($files[$key] != '..'))
			{
				echo "<tr>";
				echo "<td>$files[$key]</td>";
				echo "<td>".date("F d Y H:i:s",$times[$key])."</td>";
				echo "<td>$value</td>";
				echo "</tr>";
			}
		}
		

	}
	else
		{
			asort($files);
			foreach ($files as $key => $value) 
			if(($files[$key] != '.') && ($files[$key] != '..'))	
			{
				echo "<tr>";
				echo "<td>$files[$key]</td>";
				echo "<td>".date("F d Y H:i:s",$times[$key])."</td>";
				echo "<td>$sizes[$key]</td>";
				echo "</tr>";
			}
		}	
	echo "</table>";

	 ?>
</body>
</html>