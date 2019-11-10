<?php

$stuquestions = file("stuquestions.txt");

for($x=0; $x<6;$x++){
    unset($stuquestions[0]);
}
file_put_contents("stuquestions.txt", implode(""),$stuquestions);


header("location:teacherpage.php");
?>