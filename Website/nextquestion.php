<?php

$questions=fopen("questions.txt","r");
$stuquestions=fopen("stuquestions.txt","w");
$line=fets($questions);
$line=fets($questions);
$line=fets($questions);
$line=fets($questions);
$line=fets($questions);
$line=fets($questions);
while(!feof($questions)){
    $line=fets($questions);
    fwrite($stuquestions,$line);
}
fclose($questions);
fclose($stuquestions);
$questions=fopen("questions.txt","w");
$questions= file_get_contents("stuquestions.txt");



header("location:teacherpage.php");
?>