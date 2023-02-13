<!DOCTYPE HTML5>
<html><?php
$config = fopen("config.json", "r") or die("Unable to open file!");
$jsonobj = fread($config,filesize("config.json"));
fclose($config);
$obj = json_decode($jsonobj);
$brandName = $obj->$brand;
?>
<script src="https://publisher.linkvertise.com/cdn/linkvertise.js"></script><script>linkvertise(585398, {whitelist: [], blacklist: [""]});</script>
<head>
	<meta charset="utf-8">
	<meta max-age='1'/>
	<meta name="viewport" content="width=device-width">
	<title>accs.txt | <?php echo $brandName; ?> File Storage</title>
	<link href="https://bouncecss.bookie0.repl.co/bounce.css" rel="stylesheet" type="text/css" />
</head>
<body>
<a href="/uploads/q1dfIDV56accs.txt">accs.txt</a>
</body>
</html>