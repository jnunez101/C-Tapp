<!DOCTYPE html>
<html lang="en">
<?php

$username = $_GET["username"];
$password = $_GET["password"];

$my_file = fopen("logins.txt", "r");
$teacher = fopen("teachers.txt", "r");
while (! feof($my_file)) {
    $line = fgets($my_file);
    if (strpos($line, $username)){
        if (strpos($line, $password)){
            while (! feof($teacher)) {
            $name = fgets($teacher);
            if (strpos($name, $username)){
                header("Location: teacherpage.html");
            } else 	{
                header("Location: studentpage.html");
            }
            }
        }
    }
}

header("Location: index.html");

?>
</html>
