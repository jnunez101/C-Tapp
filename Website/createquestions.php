
<?php
echo "whoami";
$question = $_GET["question"];
$answera = $_GET["answera"];
$answerb = $_GET["answerb"];
$answerc = $_GET["answerc"];
$answerd = $_GET["answerd"];
$answere = $_GET["answere"];
$answer = $_GET["answer"];

$questions = fopen("questions.txt", "w");
fwrite($questions,$question);
fwrite($questions,$answera);
fwrite($questions,$answerb);
fwrite($questions,$answerc);
fwrite($questions,$answerd);
fwrite($questions,$answere);

$key = fopen("key.txt", "w");
fwrite($key,$answer);

fclose($questions);
fclose($key);

header("location:teacherpage.html");
?>