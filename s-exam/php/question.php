<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../style.css?v=3">
    <title>Document</title>
</head>
<body>
    <div class="header">
        <h1> Mar Baselious Christian College of Engg. & Technology </h1>
        <h3> Online Scholarship Exam </h3>
    </div>
    <div class="container">
        <div class="topic-container">
            <div class="topic">Physics</div>
            <div class="line-next"></div>
            <div class="topic">Chemistry</div>
            <div class="line-next"></div>
            <div class="topic">Maths</div>
            <div class="line-next"></div>
            <div class="topic">GK</div>
        </div>
        <div class="question-list" id="question-list">
            
        </div>
        <div class="question-container">
            <div class="question" id="question-target">
                Q. Question Here?
            </div>
            <div class="option-container">
                <div id="option_target">
                    <div>
                        <input type="radio" name="ans" id="ans" value="a">
                        <span id="op1-target">Option 1</span>
                    </div>
                    <div>
                        <input type="radio" name="ans" id="ans" value="b">
                        <span id="op2-target">Option 2</span>
                    </div>     
                    <div>
                        <input type="radio" name="ans" id="ans" value="c">
                        <span id="op3-target">Option 3</span>
                    </div>               
                    <div>
                        <input type="radio" name="ans" id="ans" value="d">
                        <span id="op4-target">Option 4</span>
                    </div>
                </div>
            </div>
        </div>
        <div id="submit">
            <input type="submit" value="Submit" onclick="findAns()">
            <input type="button" value="Next Category" onclick="nextTopic()" style="margin-left: 50px">
        </div>
    </div>
</body>
</html>

<script src="../script.js?v=4"> </script>