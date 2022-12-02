<!DOCTYPE html>
<html lang="en">
<?php
	$config = fopen("config.json", "r") or die("Unable to open file!");
	$jsonobj = fread($config,filesize("config.json"));
	fclose($config);
	$obj = json_decode($jsonobj);
	$brandName = $obj->brand;
?>
<head>
    <meta charset="UTF-8">
    <title><?php echo $brandName; ?> File Storage</title>
</head>
	<style>
		html {
			background: black;
		}
		body {
			color: green;
		}
	</style>
<body>
    <form action="fileUploadScript.php" method="post" enctype="multipart/form-data">
        Upload a File: 
        <input type="file" name="the_file" id="fileToUpload"><br>
        <input type="submit" name="submit" value="Start Upload">
    </form>
</body>
</html>