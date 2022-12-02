<?php
$config = fopen("config.json", "r") or die("Unable to open file!");
$jsonobj = fread($config,filesize("config.json"));
fclose($config);
$obj = json_decode($jsonobj);

$filesizelimit = $obj->filesize;
$r1 = $obj->rand1;
$r2 = $obj->rand2;
$brandName = $obj->brand;
$permitted_chars = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz.-';
 
function generate_string($input, $strength = 16) {
    $input_length = strlen($input);
    $random_string = '';
    for($i = 0; $i < $strength; $i++) {
        $random_character = $input[mt_rand(0, $input_length - 1)];
        $random_string .= $random_character;
    }
 
    return $random_string;
}
$rand = generate_string($permitted_chars, rand($r1, $r2));
    $currentDirectory = getcwd();
    $uploadDirectory = "/uploads/$rand";

    $errors = []; // Store errors here

    $fileExtensionsAllowed = ['jpeg', 'gif','jpg','png', 'zip', 'exe', 'json', 'js', 'py', 'pyc', 'cpp', 'asm', 'docx']; // These will be the only file extensions allowed 

    $fileName = $_FILES['the_file']['name'];
    $fileSize = $_FILES['the_file']['size'];
    $fileTmpName  = $_FILES['the_file']['tmp_name'];
    $fileType = $_FILES['the_file']['type'];
    $fileExtension = strtolower(end(explode('.',$fileName)));

    $uploadPath = $currentDirectory . $uploadDirectory . basename($fileName);
		$downloadPath = "uploads/$rand" . basename($fileName);

    if (isset($_POST['submit'])) {

      if (! in_array($fileExtension,$fileExtensionsAllowed)) {
        $errors[] = "This file extension is not allowed. Please upload one of the following: 'jpeg', 'jpg', 'gif', 'png', 'zip', 'exe', 'json', 'js', 'py', 'pyc', 'cpp', 'asm', 'docx'";
      }

      if ($fileSize > $filesizelimit) {
        $errors[] = "File exceeds maximum size ($filesizelimit Bytes)";
      }

      if (empty($errors)) {
        $didUpload = move_uploaded_file($fileTmpName, $uploadPath);

        if ($didUpload) {
					$pathTo = 'pages/' . $rand . $fileName . ".html";
          echo "<p>The file " . basename($fileName) . " has been uploaded!</p><br>Check it out <a href=\"$pathTo\">here</a>";
					$content = "<!DOCTYPE HTML5>\n<html>\n<head>\n	<meta charset=\"utf-8\">\n	<meta max-age='1'/>\n	<meta name=\"viewport\" content=\"width=device-width\">\n	<title>" . basename($fileName) . " | $brandName File Storage</title>\n	<link href=\"https://bouncecss.bookie0.repl.co/bounce.css\" rel=\"stylesheet\" type=\"text/css\" />\n</head>\n<body>\n<a href=\"/$downloadPath\">$fileName</a>\n</body>\n</html>";
					$fh = fopen($pathTo, 'w');
					fwrite($fh, $content);
					fclose($fh);
        } else {
          echo "An error occurred. Please contact the <a href=\"mailto:altifygaming0@gmail.com?subject=An%20error%20occurred%20in%20the%20File%20Storage%20System%20project&body=Hey%20Altify%20Developing%2C%0D%0A%0D%0AThere%20was%20an%20error%20in%20the%20website%20for%20file%20storage%20%7Bupload%20screenshot%20here%7D%0D%0A%0D%0AThanks%2C%20%7Bname%20or%20discord%20tag%20or%20leave%20blank%20if%20you%20wish%20to%20remain%20anonymous%7D\">administrator</a>.";
        }
      } else {
        foreach ($errors as $error) {
          echo $error . "These are the errors" . "\n";
        }
      }

    }
?>