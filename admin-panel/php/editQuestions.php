<script>
    var currentTopic = "physics", hardness = null;
    var questionList = {};
    var quesPerLoad = 10, pageNo = 1;

    var questionDivTemplate = document.createElement("DIV");
    questionDivTemplate.setAttribute("class", "question-div-container");

    var slno = document.createElement("DIV"),
        question = document.createElement("DIV"),
        options = document.createElement("DIV"),
        answer = document.createElement("DIV"),
        difficulty = document.createElement("DIV"),
        enteredBy = document.createElement("DIV");
    slno.setAttribute("class", "q-slno");

    question.setAttribute("class", "q-question");
    // question.setAttribute("onclick", "edit(this, this.parentNode.rowNo)");
    
    options.setAttribute("class", "q-options");
    
    answer.setAttribute("class", "q-answer");
    answer.setAttribute("id", "answer");
    // answer.setAttribute("onclick", "editOptions(this)");
    
    difficulty.setAttribute("class", "q-difficulty");
    difficulty.setAttribute("id", "difficulty");
    // difficulty.setAttribute("onclick", "editOptions(this)");

    enteredBy.setAttribute("class", "q-enteredby");
    
    var op1 = document.createElement("DIV"), 
        op2 = document.createElement("DIV"), 
        op3 = document.createElement("DIV"), 
        op4 = document.createElement("DIV");
    // op1.setAttribute("onclick", "edit(this)");
    // op2.setAttribute("onclick", "edit(this)");
    // op3.setAttribute("onclick", "edit(this)");
    // op4.setAttribute("onclick", "edit(this)");

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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Questions</title>
    <link rel="stylesheet" href="../style.css?v=3">
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

        <div class="question-container" id="question-list-target"></div>

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
        console.log(hardness);
        if(event.innerHTML.length !== 1) {

            document.getElementById(currentTopic).childNodes[1].classList.remove('topic-selected');
            if(hardness) {
                let ele = document.getElementById(currentTopic).childNodes[3].childNodes[(hardness=="easy"?1:((hardness=="average")?3:5))];
                ele.classList.remove('topic-selected');
            }
            currentTopic = event.parentNode.id;
            event.classList.add('topic-selected');
            hardness = null;
        }
        else {
            let parentButton = event.parentNode.parentNode.childNodes[1];
            
            //  Remove style of currently selected Buttons
            document.getElementById(currentTopic).childNodes[1].classList.remove('topic-selected');
            if(hardness) {
                let ele = document.getElementById(currentTopic).childNodes[3].childNodes[(hardness=="easy"?1:((hardness=="average")?3:5))];
                ele.classList.remove('topic-selected');
            }
            // console.log(event);
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
        }
        fetchQuestionList(); 
    }

    function fetchQuestionList() {
        var x = "&topic="+currentTopic;
        x += hardness ? ("&difficulty="+hardness) : "";
        
        var xhr = new XMLHttpRequest();
        xhr.open('GET', 'fetchQuestionList.php?'+x, true);
        xhr.onreadystatechange = function() {
            if(xhr.readyState == 4 && xhr.status == 200) {
                questionList.length = 0;
                questionList = JSON.parse(xhr.responseText);
                displayList();
            }
        }
        xhr.send(x);
    }

    function displayList() {
        var target = document.getElementById('question-list-target');
        target.innerHTML = "";

        console.log(questionList, questionList.length);
        for(let x=0; x<questionList.length; x++) {
            var div = questionDivTemplate.cloneNode(true);
            div.setAttribute("row-no", questionList[x].id);

            //  Sl No.
            div.childNodes[0].innerHTML = questionList[x].slno;

            //  Question
            div.childNodes[1].innerHTML = questionList[x].question;

            //  Options
            div.childNodes[2].childNodes[0].innerHTML = questionList[x].option1;
            div.childNodes[2].childNodes[1].innerHTML = questionList[x].option2;
            div.childNodes[2].childNodes[2].innerHTML = questionList[x].option3;
            div.childNodes[2].childNodes[3].innerHTML = questionList[x].option4;

            //  Answer
            div.childNodes[3].innerHTML = questionList[x].answer;

            //  Difficulty
            div.childNodes[4].innerHTML = questionList[x].difficulty;

            //  Entered By
            div.childNodes[5].innerHTML = questionList[x].entered;

            console.log(div);

            target.appendChild(div);
        }
        console.log("Select - " + currentTopic + ", " + hardness);
    }

    function pageChange(str) {
            
    }

    function edit(ele) {

    }
    function editOptions(ele) {

    }
</script>