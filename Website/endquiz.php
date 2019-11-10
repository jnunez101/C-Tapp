<?php
unlink("questions.txt");
unlink("stuquestions.txt");
$command='python3 Grades.py';
exec($command,$out, $status);

header("location:teacherpage.php")

?>