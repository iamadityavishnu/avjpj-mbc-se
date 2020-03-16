<script>
    var currentTopic = "physics", hardness = null;

    var questionDivTemplate = document.createElement("DIV");
    var slno = document.createElement("DIV"),
        question = document.createElement("DIV"),
        options = document.createElement("DIV"),
        answer = document.createElement("DIV"),
        difficulty = document.createElement("DIV"),
        enteredBy = document.createElement("DIV");
    slno.setAttribute("class", "q-slno");

    question.setAttribute("class", "q-question");
    question.setAttribute("onclick", "edit(this)");
    
    options.setAttribute("class", "q-options");
    
    answer.setAttribute("class", "q-answer");
    answer.setAttribute("id", "answer");
    answer.setAttribute("onclick", "editOptions(this)");
    
    difficulty.setAttribute("class", "q-difficulty");
    difficulty.setAttribute("id", "difficulty");
    difficulty.setAttribute("onclick", "editOptions(this)");

    enteredBy.setAttribute("class", "q-enteredby");
    
    var op1 = document.createElement("DIV"), 
        op2 = document.createElement("DIV"), 
        op3 = document.createElement("DIV"), 
        op4 = document.createElement("DIV");
    op1.setAttribute("onclick", "edit(this)");
    op2.setAttribute("onclick", "edit(this)");
    op3.setAttribute("onclick", "edit(this)");
    op4.setAttribute("onclick", "edit(this)");

    options.appendChild(op1);
    options.appendChild(op2);
    options.appendChild(op3);
    options.appendChild(op4);

    //  Add all child to the template
    questionDivTemplate.appendChild(slno);
    questionDivTemplate.appendChild(question);
    questionDivTemplate.appendChild(options);
    questionDivTemplate.appendChild(answer);
    questionDivTemplate.appendChild(difficulty);
    questionDivTemplate.appendChild(enteredBy);
</script>

<?php 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Questions</title>
    <link rel="stylesheet" href="../style.css?v=2">
</head>
<body>
    <div class="body-container">
        <div class="filter-container">
            <div id="physics">
                <button id="physics-btn" class="topic-button topic-selected" onclick="selectTopic(this)"> Physics </button>
                <div class="difficulty-options">
                    <button onclick="selectTopic(this)">E</button>
                    <button onclick="selectTopic(this)">A</button>
                    <button onclick="selectTopic(this)">H</button>
                </div>
            </div>
            <div id="chemistry">
                <button id="chemistry-btn" class="topic-button" onclick="selectTopic(this)"> Chemistry </button>
                <div class="difficulty-options">
                    <button onclick="selectTopic(this)">E</button>
                    <button onclick="selectTopic(this)">A</button>
                    <button onclick="selectTopic(this)">H</button>
                </div>
            </div>

            <div id="maths">
                <button id="maths-btn" class="topic-button" onclick="selectTopic(this)"> Maths </button>
                <div class="difficulty-options">
                    <button onclick="selectTopic(this)">E</button>
                    <button onclick="selectTopic(this)">A</button>
                    <button onclick="selectTopic(this)">H</button>
                </div>
            </div>
            
            <div id="gk">
                <button id="gk-btn" class="topic-button" onclick="selectTopic(this)"> GK </button>
                <div class="difficulty-options">
                    <button onclick="selectTopic(this)">E</button>
                    <button onclick="selectTopic(this)">A</button>
                    <button onclick="selectTopic(this)">H</button>
                </div>
            </div>
        </div>
        <div class="question-container"></div>
        <div class="page-buttons">
            <button class="fd-button" onclick="pageChange('-')">&lt;&lt;&nbsp;Prev</button>
            <button class="fd-button" onclick="pageChange('+')">Next&nbsp;&gt;&gt;</button>
        </div>
    </div>
</body>
</html>

<script>
    fetchQuestionList();

    function selectTopic(event) {
        // console.log(event.innerHTML.length);
        if(event.innerHTML.length !== 1) {
            document.getElementById(currentTopic).childNodes[1].classList.remove('topic-selected');
            currentTopic = event.parentNode.id;
            event.classList.add('topic-selected');
            hardness = null;
        }
        else {
            let parentButton = event.parentNode.parentNode.childNodes[1];
            
            //  Remove style of currently selected Buttons
            document.getElementById(currentTopic).childNodes[1].classList.remove('topic-selected');
            if(hardness != null) {
                            
            }
            console.log(event);
            //  Set current topic
            currentTopic = event.parentNode.parentNode.id;

            //  Set style of currently selected button
            parentButton.classList.add('topic-selected');
            event.classList.add('topic-selected');
            
            switch(event.innerHTML) {
                case 'E' :
                    hardness = "easy"; 
                    break;
                case 'A' : 
                    hardness = "average";
                    break;
                case 'H' : 
                    hardness = "hard";
                    break;
            }
            console.log(hardness);
        }
    }

    function fetchQuestionList() {

    }
    function pageChange(str) {
            
    }

    function edit(ele) {

    }
    function editOptions(ele) {

    }
</script>