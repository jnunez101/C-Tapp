<?php
unlink("key.txt");
$questions = fopen("questions.txt", "a");
$stuquestions = fopen("stuquestions.txt", "a");
$newline="\n";
while(! feof($questions)){
    $line=fgets($questions);
    fwrite($stuquestions,$answera);
    fwrite($stuquestions,$newline);
}

fclose($questions);
fclose($stuquestions);
header("location:teacherpage.html");
?>