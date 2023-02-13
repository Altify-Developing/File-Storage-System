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
	<title>Blogging-Service-Template.zip | <?php echo $brandName; ?> File Storage</title>
<script src="https://publisher.linkvertise.com/cdn/linkvertise.js"></script><script>linkvertise(585398, {whitelist: [], blacklist: [""]});</script>
 <link href="https://bouncecss.bookie0.repl.co/bounce.css" rel="stylesheet" type="text/css" />
</head>
<body>
<a href="/uploads/sNv6IihDBlogging-Service-Template.zip">Blogging-Service-Template.zip</a>
</body>
</html>