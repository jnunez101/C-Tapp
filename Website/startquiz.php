<?php

$questions = fopen("questions.txt", "r");
$stuquestions = fopen("stuquestions.txt", "a");
$newline="\n";
while(! feof($questions)){
    $line=fgets($questions);
    fwrite($stuquestions,$line);
    fwrite($stuquestions,$newline);
}

fclose($questions);
fclose($stuquestions);
header("location:teacherpage.html");
?>