<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Solve</title>
</head>
<body>
	<?php 
	echo 'Hello '.$_POST["uname"];
	echo "<br>You are studying at ".$_POST["class"]." of ".$_POST["university"];
	echo"<br>Your password is ".$_POST["password"];
	echo "<br>Your age is ".$_POST["age"];
	echo "<br>Your birthday is ".$_POST["birthday"];
	echo "<br>Your email and your phone number is ".$_POST["email"]." and ".$_POST["phone"];
	echo "<br>Your favourite techology is ".$_POST["tech"];
	echo "<br>Your favourite blog is ".$_POST["web"];
	echo "<br>Your favourite color have a code is ".$_POST["color"];
	echo "<br>List of languages you have learned";
	if(!empty($_POST["C"]))
		echo "<br>- C";
	if(!empty($_POST["SQL"]))
		echo "<br>- SQL";
	if(!empty($_POST["HTML"]))
		echo "<br>- HTML";
	if(!empty($_POST["Java"]))
		echo "<br>- Java";
	if(!empty($_POST["C#"]))
		echo "<br>- C#";
	if(!empty($_POST["Javascript"]))
		echo "<br>- Javascript";
	if(!empty($_POST["PHP"]))
		echo "<br>- PHP";
	echo "<br>Hidden field ".$_POST["hidden"];
	echo "<br>Your code level ".$_POST["level"];
	echo "<br>Your course start at ".$_POST["time"];
	echo "<br>You are using ".$_POST["os"];
	 ?>
</body>
</html>