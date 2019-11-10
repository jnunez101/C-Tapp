<?php

$questions = fopen("questions.txt", "r");
$stuquestions = fopen("stuquestions.txt", "a");
$newline="\n";
while(! feof($questions)){
    $line=fgets($questions);
    fwrite($stuquestions,$line);
}

fclose($questions);
fclose($stuquestions);
header("location:teacherpage.php");
?>