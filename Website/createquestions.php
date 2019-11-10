<?php
$question = $_GET["ques"];
$answera = $_GET["ansa"];
$answerb = $_GET["ansb"];
$answerc = $_GET["ansc"];
$answerd = $_GET["ansd"];
$answere = $_GET["anse"];
$answer = $_GET["ans"];

$newline="\n";
$questions = fopen("questions.txt", "a");
fwrite($questions,$question);
fwrite($questions,$newline);
fwrite($questions,$answera);
fwrite($questions,$newline);
fwrite($questions,$answerb);
fwrite($questions,$newline);
fwrite($questions,$answerc);
fwrite($questions,$newline);
fwrite($questions,$answerd);
fwrite($questions,$newline);
fwrite($questions,$answere);
fwrite($questions,$newline);

$key = fopen("key.txt", "a");
$comma=",";
fwrite($key,$comma);
fwrite($key,$answer);

fclose($questions);
fclose($key);

header("location:teacherpage.php");
?>