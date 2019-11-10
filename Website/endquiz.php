<?php
unlink("questions.txt");
unlink("stuquestions.txt");
$trigger=fopen("trigger.txt");
fclose($trigger);
header("location:teacherpage.html")
?>