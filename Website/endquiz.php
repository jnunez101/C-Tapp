<?php
unlink("questions.txt");
unlink("stuquestions.txt");
$trigger=fopen("trigger.txt","w");
fclose($trigger);
header("location:teacherpage.php")
?>