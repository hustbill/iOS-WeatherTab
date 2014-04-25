<?php

if(isset($_GET["format"])){
	$format = $_GET["format"];
}
else if(isset($_POST["format"])){
	$format = $_POST["format"];
}

if($format=="json")	
	header('Content-type: application/json');
else if($format=="xml")	
	header('Content-type: application/xml');
else if($format=="plist")	
	header('Content-type: application/x-plist');


$raw = file_get_contents("samples/weather.".$format);
echo $raw;
?>