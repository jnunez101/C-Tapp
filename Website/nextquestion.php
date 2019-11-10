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
$questions=fopen("questions.txt","w");
$questions=fwrite($stuquestions);


header("location:teacherpage.php");
?>