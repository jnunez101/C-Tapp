<!DOCTYPE html>
<html lang="en">
<head>
<style type="text/css">
button{
	display: block;
	padding: 20px 48px;
	border: 4px solid black;
	background-color: white;
	border-radius: 20px;
	margin: 10px 10px 10px 10px;
	font-size: 20px;
	color: black;
	font-weight: bold;
}
</style>
<title>
C-Tapp Student Page
</title>
</head>

<body style="background-color:#33ccff">

<div style="width: 10%; height: 20%">
<img src="https://i.imgur.com/PbJC1iR.png" style="width:100%"></img>
</div>

<div style="margin: auto; width: 30%; font-size: 50px; font-family:helvetica">
Question:
<?php
$file = fopen("stuquestions.txt","r");
$line=fgets($file);
echo "$line";
?>
</div>


<div style="margin: auto; width: 20%">
<?php 

$line=fgets($file); 
?>
<form action="stuanswer.php" method="get">
    <input type="hidden" name="answer" value="a">
<button type="submit">A</button> 
</form>
<?php echo $line;

$line=fgets($file);
?>

    <form action="stuanswer.php" method="get">
        <input type="hidden" name="answer" value="b">
        <button type="submit">B</button> 
    </form>
<?php echo $line;

$line=fgets($file);
?>
    <form action="stuanswer.php" method="get">
        <input type="hidden" name="answer" value="c">
        <button type="submit">C</button> 
    </form>
<?php echo $line;

$line=fgets($file);
?>
    <form action="stuanswer.php" method="get">
        <input type="hidden" name="answer" value="d">
        <button type="submit">D</button> 
    </form>
<?php echo $line;

$line=fgets($file);
?>
    <form action="stuanswer.php" method="get">
        <input type="hidden" name="answer" value="e">
        <button type="submit">E</button> 
    </form>
<?php echo $line;

?>
</div>
</body>
</html>