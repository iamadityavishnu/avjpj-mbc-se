const questionNo = 10;
var user = "test", 
    currentTopic = "physics", 
    currentQuestion = 1;
var arr = {};

initEvnironment();

function initEvnironment() {
    questionList(questionNo);
    document.getElementsByClassName("topic")[0].classList.add("topic-selected");
    document.getElementsByClassName("q-circle")[0].classList.add("question-selected");
    createUserTable();
    setQuestion(questionNo, currentTopic);
    // deleteUserTable();
}
function createUserTable() {
    // console.log("create user table");
    var xhr = new XMLHttpRequest();
    xhr.open('GET', 'createUserDb.php?&user='+user, true);
    xhr.onreadystatechange = function() {
        if(xhr.readyState == 4 && xhr.status == 200) {
            if(xhr.responseText != "1") {
                // alert("Some Error has occured regarding your account.\n Please contact the institution");
                // window.location = "http://localhost/avjpj-mbc-se/";
                console.log("User DB Created");
            } 
            else {
                console.log("- User DB Created");
            }
        }
    }
    xhr.send(user);
}

function setQuestion(n, topic) {
    var xhr = new XMLHttpRequest();
    var x = "&n="+n+"&topic="+topic+"&user="+user;
    xhr.open('GET', 'setQuestion.php?'+x, true);
    xhr.onreadystatechange = function() {
        if(xhr.readyState == 4 && xhr.status == 200) {
            console.log("- Questions Set!");
        }
    }
    xhr.send(x);

    fetchQuestion();
}

function fetchQuestion() {
    var xhr = new XMLHttpRequest();
    var x = "&topic="+currentTopic+"&q="+currentQuestion+"&user="+user;

    xhr.open('GET', 'fetchQuestion.php?'+x, true);
    xhr.onreadystatechange = function() {
        if(xhr.readyState == 4 && xhr.status == 200) {
            arr = JSON.parse(xhr.responseText);
            // console.log(arr);
            displayQuestion(arr);
        }
    }
    xhr.send(x);
}

function displayQuestion(arr) {
    console.log(arr);
    let q = document.getElementById('question-target'),
        op1 = document.getElementById('op1-target'),
        op2 = document.getElementById('op2-target'),
        op3 = document.getElementById('op3-target'),
        op4 = document.getElementById('op4-target');

    q.innerHTML = arr.question;
    op1.innerHTML = arr.option1;
    op2.innerHTML = arr.option2;
    op3.innerHTML = arr.option3;
    op4.innerHTML = arr.option4;
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
    document.getElementsByClassName("q-circle")[(currentQuestion-1)].classList.remove("question-selected");
    event.classList.add("question-selected");
    currentQuestion = parseInt(event.innerHTML);

    //  Clear marked Question
    var a = document.getElementsByName('ans');
    for(let i=0; i<4; i++) {
        a[i].checked = false;
    }

    console.log(currentQuestion);
    fetchQuestion();

    //  May Need to be changed later based on Question number
    
}

function nextTopic() {
    console.log("Wait... Sheriyakam");
}


var answer = null;

//  Find Marked Answer
function findAns() {
    var a = document.getElementsByName('ans');
    var flag = 0;
    for(let i=0; i<4; i++) {
        if(a[i].checked) {
            answer = a[i].value;
            console.log(answer);
            flag++;
        }
    }
    if(flag == 0) {
        alert("Please select an answer");
    }
} 