<?php
$question = $_GET["ques"];
$answera = $_GET["ansa"];
$answerb = $_GET["ansb"];
$answerc = $_GET["ansc"];
$answerd = $_GET["ansd"];
$answere = $_GET["anse"];
$answer = $_GET["ans"];

$questions = fopen("questions.txt", "a");
fwrite($questions,$question);
fwrite($questions,$answera);
fwrite($questions,$answerb);
fwrite($questions,$answerc);
fwrite($questions,$answerd);
fwrite($questions,$answere);

$key = fopen("key.txt", "a");
fwrite($key,$answer);

fclose($questions);
fclose($key);

header("location:teacherpage.html");
?>