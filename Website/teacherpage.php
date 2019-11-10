<!DOCTYPE html>
<head>
    <title>
        C-Tapp Teacher Page
    </title>
    <style type="text/css">
        input {
            display: block;
            font-size: 20px;
            font-family: helvetica;
            border-radius: 5px;
<!DOCTYPE html>
<html lang="en">
<head>
    <title>
        C-Tapp Teacher Page
    </title>
    <style type="text/css">
        input {
            display: block;
            font-size: 20px;
            font-family: helvetica;
            border-radius: 5px;
            margin: 2px 2px 2px 2px;
            padding: 2px 2px 2px 2px;
        }
        label {
            font-size: 20px;
            font-family: helvetica;
        }
    </style>
</head>
<body style="background-color:#33ccff">

<div style="width: 10%; height: 20%">
    <img src="https://i.imgur.com/PbJC1iR.png" style="width:100%"></img>
</div>

<div style="width: 40%; float:left">
    <form action = createquestions.php method="get">
        <label for="question">Enter a Question:</label>
        <input type="text" id = question name="ques"></input>
        <label for="answera">Enter Answer Choice A</label>
        <input type="text" id = answera name="ansa"></input>
        <label for="answerb">Enter Answer Choice B</label>
        <input type="text" id = answerb name="ansb"></input>
        <label for="answerc">Enter Answer Choice C</label>
        <input type="text" id = answerc name="ansc"></input>
        <label for="answerd">Enter Answer Choice D</label>
        <input type="text" id = answerd name="ansd"></input>
        <label for="answere">Enter Answer Choice E</label>
        <input type="text" id = answere name="anse"></input>
        <label for="answer">Enter Correct Answer Letter</label>
        <input type="text" id = answer name="ans"></input>
        <button type="submit">Add Question</button>
    </form>

    <form action = startquiz.php method="get">
        <button type="submit">Start Quiz</button>
    </form>
    <form action = nextquestion.php method="get">
        <button>Next Question</button>
    </form>

    <form action = endquiz.php method="get">
        <button>End Quiz</button>
    </form>

</div>

<div style="width: 40%; float: right; font-size:50px; font-family:helvetica">
    Current Question: <?php
    $q= fopen("stuquestions.txt", "r");
    echo fgets($q);
    ?>
</div>

</body>
</html>