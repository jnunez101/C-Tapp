<?php

$output= fopen("test.txt","a");
$answer = $_GET["answer"];
$comma=",";
fwrite($output,$comma);
fwrite($output,$answer);
fclose($output);
header("location:studentpage.php")
?>