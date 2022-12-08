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
	<title>Screenshot 2022-12-08 8.41.06 AM.png | Altify File Storage</title>
	<link href="https://bouncecss.bookie0.repl.co/bounce.css" rel="stylesheet" type="text/css" />
</head>
<body>
<a href="/uploads/qxhzIyScreenshot 2022-12-08 8.41.06 AM.png">Screenshot 2022-12-08 8.41.06 AM.png</a>
</body>
</html>