<!DOCTYPE HTML5>
<html><?php
$config = fopen("config.json", "r") or die("Unable to open file!");
$jsonobj = fread($config,filesize("config.json"));
fclose($config);
$obj = json_decode($jsonobj);
$brandName = $obj->$brand;
?>
<head>
	<meta charset="utf-8">
	<meta max-age='1'/>
	<meta name="viewport" content="width=device-width">
	<title>2022-12-30 22.56.26 edition.cnn.com edfc90f9eb4d.png | <?php echo $brandName; ?> File Storage</title>
	<link href="https://bouncecss.bookie0.repl.co/bounce.css" rel="stylesheet" type="text/css" />
</head>
<body>
<a href="/uploads/YDFjUTt2022-12-30 22.56.26 edition.cnn.com edfc90f9eb4d.png">2022-12-30 22.56.26 edition.cnn.com edfc90f9eb4d.png</a>
</body>
</html>