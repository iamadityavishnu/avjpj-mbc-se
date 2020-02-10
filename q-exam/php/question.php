<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../style.css?v=2">
    <title>Document</title>

    <script>
        const questionNo = 10;
        var phyQuestion = [], 
            chemQuestion = [],
            mathsQuestion = [],
            gkQuestion = [];

        var level = {
            easy : {
                e: 3,
                a: 4,
                h: 3
            },
            medium : {
                e: 2,
                a: 6,
                h: 2
            },
            hard : {
                e: 2,
                a: 2,
                h: 6
            }
        };
        var question = {
            physics: {
                easy : [],
                average : [],
                hard : []
            },
            chemistry : {
                easy : [],
                average : [],
                hard : []
            },
            maths : {
                easy : [],
                average : [],
                hard : []
            },
            gk : {
                easy : [],
                average : [],
                hard : []
            }
        }
        var currentQuestion = 0;
        var currentTopic = 0;

        //  Prototype of Question Object *D*
        console.log(question);

        function setQuestion(arr, subject) {
            arr.length = 0;
            for(let i=0; i<question[subject].easy.length; i++) {
                arr.push(question[subject].easy[i]);
            }
            for(let i=0; i<question[subject].average.length; i++) {
                arr.push(question[subject].average[i]);
            }
            for(let i=0; i<question[subject].hard.length; i++) {
                arr.push(question[subject].hard[i]);
            }
        }
    </script>
</head>
<body>
    <?php 
        include '../../dbConnect.php';
        $var_sql = "";
        
        //  Initialise Question Parameters
        $subject = ["physics", "chemistry", "maths", "gk"];
        fetchCategoryQuestions("physics", "easy");
        fetchCategoryQuestions("physics", "average");
        fetchCategoryQuestions("physics", "hard");

        // fetchCategoryQuestions("chemistry", "easy");
        // fetchCategoryQuestions("chemistry", "average");
        // fetchCategoryQuestions("chemistry", "hard");

        // fetchCategoryQuestions("maths", "easy");
        // fetchCategoryQuestions("maths", "average");
        // fetchCategoryQuestions("maths", "hard");

        // fetchCategoryQuestions("gk", "easy");
        // fetchCategoryQuestions("gk", "average");
        // fetchCategoryQuestions("gk", "hard");
        ?> 
        <script>
            setQuestion(phyQuestion, "physics"); 
            console.log("physics", phyQuestion);

            // setQuestion(chemQuestion, "chemistry"); 
            // setQuestion(mathsQuestion, "maths"); 
            // setQuestion(gkQuestion, "gk"); 
        </script> 
        <?php

        //  Debug function *D*
        function cprint($string) {
            ?> 
            <script>console.log("<?php echo $string; ?>");</script> 
            <?php
        } 

        //  Find table name based on category
        function checkSub($sub) {
            switch($sub) {
                case "physics" : 
                    return "physics_questions"; break;
                case "chemistry": 
                    return "chemistry_questions"; break;
                case "maths": 
                    return "maths_questions"; break;
                case "gk": 
                    return "gk_questions"; break;
            }
        }

        //  Add Question to Javascript Object
        function addQuestion($row, $diff, $sub) {
            ?>
            <script>
                obj = {
                question : "<?php echo $row[0] ?>",
                option1 : "<?php echo $row[1] ?>",
                option2 : "<?php echo $row[2] ?>",
                option3 : "<?php echo $row[3] ?>",
                option4 : "<?php echo $row[4] ?>",
                answer : "<?php echo $row[5] ?>"
            };
            question.<?php echo $sub ?>.<?php echo $diff ?>.push(obj);
            </script>
            <?php
        }

        //  Fetch Question Set from Database
        function fetchCategoryQuestions($sub, $diff) {
            $table = checkSub($sub);
            $var_sql = "SELECT question, option1, option2, option3, option4, answer FROM ".$table." WHERE difficulty='".$diff."'";
            $result = mysql_query($var_sql);

            while($row = mysql_fetch_array($result)) {
                addQuestion($row, $diff, $sub);
            }

            // Debugs Query *D*
            // cprint($var_sql);
            // cprint(mysql_fetch_array($result));
        }
    ?>  

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

<script src="../script.js?v=1"> </script>

