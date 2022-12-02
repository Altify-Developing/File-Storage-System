<?php
$config = fopen("config.json", "r") or die("Unable to open file!");
$jsonobj = fread($config,filesize("config.json"));
fclose($config);

$obj = json_decode($jsonobj);

echo $obj->prefix;
?>