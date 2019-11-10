
<?php

$username = $_GET["username"];
$password = $_GET["password"];

$my_file = fopen("logins.txt", "r");
$teacher = fopen("teachers.txt", "r");
if($username == "username"){
    if($password = "password"){
        header("location:studentpage.html");
    }
}
if($username == "teacher"){
    if($password = "password"){
        header("location:teacherpage.html");
    }
}



?>

