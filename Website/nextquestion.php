<?php

$questions=fopen("questions.txt","r");
$stuquestions=fopen("stuquestions.txt","w");
$line=fgets($questions);
$line=fgets($questions);
$line=fgets($questions);
$line=fgets($questions);
$line=fgets($questions);
$line=fgets($questions);
while(!feof($questions)){
    $line=fgets($questions);
    fwrite($stuquestions,$line);
}
fclose($questions);
fclose($stuquestions);
$questions=fopen("questions.txt","w");
$questions= file_get_contents("stuquestions.txt");
fclose($questions);



header("location:teacherpage.php");
?>