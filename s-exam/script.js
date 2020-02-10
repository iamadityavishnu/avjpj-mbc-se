const questionNo = 10;
var currentQuestion = 0;
initEvnironment();

function initEvnironment() {
    questionList(questionNo);
    document.getElementsByClassName("topic")[0].classList.add("topic-selected");
    document.getElementsByClassName("q-circle")[0].classList.add("question-selected");
    createUserTable();
    // deleteUserTable();
}
function createUserTable() {
    console.log("create user table");
}
function questionList(n) {
    const target = document.getElementById('question-list');
    for(let i=1; i<=n; i++) {
        let div = document.createElement("DIV");
        div.innerHTML = i;
        div.classList.add("q-circle");
        div.setAttribute("onclick", "selectQuestion(this)")
        target.appendChild(div);
        if(i<questionNo) {
            let line = document.createElement("DIV");
            line.classList.add("line-next");
            target.appendChild(line);
        }
    }
}

function selectQuestion(event) {
    //  event - div object
    document.getElementsByClassName("q-circle")[currentQuestion].classList.remove("question-selected");
    event.classList.add("question-selected");
    currentQuestion = parseInt(event.innerHTML)-1;

    //  May Need to be changed later based on Question number
    
}

function nextTopic() {
    console.log("Wait... Sheriyakam");
}


var answer = null;

//  Find Marked Answer
function findAns() {
    var a = document.getElementsByName('ans');
    for(let i=0; i<4; i++) {
        if(a[i].checked) {
            answer = a[i].value;
            console.log(answer);
        }
    }
}


//  =-=-=-=-=-=-=-=-=-=-=-=-=-=
// Randomise Question using random deletion of questions from "question"
//     object..