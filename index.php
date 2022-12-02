<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Altify File Storage</title>
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