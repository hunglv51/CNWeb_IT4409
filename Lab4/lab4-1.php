<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>File Upload</title>
</head>
<body>
	<form action="lab4-1.php" method="post">
		How many files will you upload ? 
		<select name="choice" id="">
			<?php 
				for ($i=1; $i < 21; $i++) { 
					echo '<option value="'.$i.'">'.$i.'</option>';
				}
			 ?>
		</select>
		<input type="submit" name='numBtn'>
	</form>

	<?php 
	if(!empty($_POST['numBtn'])){ 
	?>
	<form action="lab4-1.php" method="post" enctype="multipart/form-data">
		
		<?php 
			for ($i=1; $i <= $_POST['choice']; $i++) { 
				echo "File $i".' <input type="file" name="files[]"><br>';
			}
		 ?>
		<input type="submit" name='sendBtn'>
		<input type="reset">
	</form>
	<?php  }?>

	<?php 
	if(!empty($_POST['sendBtn']))
	{
		
		$uploadDir = "./upload/";
		
		$arr1 = $_FILES["files"]["error"];
		 foreach ($_FILES["files"]["error"] as $key => $error) {
			
			if($error == UPLOAD_ERR_OK)
			{
				$tmp_name = $_FILES['files']['tmp_name'][$key];
				$name = basename($_FILES['files']['name'][$key]);
				move_uploaded_file($tmp_name, $uploadDir.$name);
			}
		 }
	}
	 ?>

</body>
</html>