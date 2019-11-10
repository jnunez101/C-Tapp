
<?php

$username = $_GET["username"];
$password = $_GET["password"];

$file=fopen("test.txt", "a");
$ID="10438463";
fwrite($file,$ID);
fclose($file);
$key = fopen("key.txt", "a");
$starter="Key 1";

fwrite($key,$starter);
fclose($key);

if($username == "username"){
    if($password == "password"){
        header("location:studentpage.html");
    }
}
if($username == "teacher"){
    if($password == "password"){
        header("location:teacherpage.html");
    }
}



?>
