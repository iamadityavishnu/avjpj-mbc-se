const questionNo = 10, topics = ["physics", "chemistry", "maths", "gk"];
var questionArray = [], t_counter = 0;
var user = "test", 
    currentTopic = "physics", 
    currentQuestion = 1;

//  Exam Time details
var examDuration = timerDuration = 10, 
    lap = examDuration, 
    warnTime = 5;

var arr = {};
var topicTime = {
    physics: 0,
    chemistry: 0,
    maths: 0,
    gk: 0
}, interval;

initEvnironment();

window.onload = function() {
    var target = document.getElementById('timer');

    startTimer(target, examDuration);
}

function startTimer(target, duration) {
    var timer = duration, minutes, seconds;

    interval = setInterval(function () {
        minutes = parseInt(timer / 60, 10);
        seconds = parseInt(timer % 60, 10);

        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        target.innerHTML = minutes + ":" + seconds;

        if(timer <= warnTime) {
            target.style.backgroundColor = "red";
            target.style.animation = "hobble 1s infinite";
        }

        //  Stop when count down ends
        if (timer-- < 0) {
            timer = duration;
            clearInterval(interval);
        }
        
        if(timerDuration === 0) 
            finish();
        timerDuration--;
    }, 1000);
}

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
                console.log("User DB Repeatition problem");
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
            fetchQuestion();
        }
    }
    xhr.send(x);
}

function fetchQuestion() {
    var xhr = new XMLHttpRequest();
    console.log(currentTopic);
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
    // console.log(arr);
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
    questionArray.length = 0;
    for(let i=1; i<=n; i++) {
        questionArray.push(i);
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

    // console.log(currentQuestion);
    fetchQuestion();

    //  May Need to be changed later based on Question number
    
}

function nextTopic() {  
    //  Mark time for each topic
    topicTime[currentTopic] = lap - timerDuration;
    lap = timerDuration; 
    // console.log(topicTime);

    //  Change Style of Topic Selected
    document.getElementsByClassName('topic')[t_counter].classList.remove('topic-selected');
    t_counter++;
    document.getElementsByClassName('topic')[t_counter].classList.add('topic-selected');

    //  Reset Question Lists
    document.getElementById('question-list').innerHTML = "";
    questionList(questionNo);
    currentQuestion = 1;
    document.getElementsByClassName("q-circle")[0].classList.add("question-selected");

    //  Change current topic & Fetch Questions
    currentTopic = topics[t_counter];
    // console.log(currentTopic, t_counter);
    setQuestion(questionNo, currentTopic);
    // console.log(t_counter);
    if(t_counter >= 3) {
        //  Change Next Category Button to "Finish"
        var btn = document.getElementById('d-button');
        // btn.removeAttribute("onclick");
        btn.setAttribute("onclick", "finish()");
        btn.setAttribute("value", "Finish");
        // console.log(btn);
        // console.log("Finish");
    }
}

//  Finish and Clean Up Test
function finish() {    
    console.log("Finished Test");
    topicTime[currentTopic] = lap - timerDuration;
    clearInterval(interval);

    console.log(topicTime);
    
    //  Evaluate Score
    var xhr = new XMLHttpRequest();
    xhr.open("GET", "getMarks.php?&user="+user, true);
    xhr.onreadystatechange = function() {
        if(xhr.readyState == 4 && xhr.status == 200) {
            var resObj = JSON.parse(xhr.responseText);
            console.log(resObj);

            //Push Values to Database
            // pushUserDataToDB(resObj);

            /* Instead of calling pushUserDataToDb add details to db 
            using getMarks.php
            Then refractor and rename getMarks.php to markUpdate.php
            Then finally delete the below function
            Why simple useless functions creating!!!! */
        }
    }
    xhr.send(user);

    //  Redirect to Exam Finish
    // window.location = "examFinish.php";
}

// function pushUserDataToDB(obj) {
//     var x = "&user=" + user;
//     x += "&phytime=" + topicTime["physics"];
//     x += "&chemtime=" + topicTime["chemistry"];
//     x += "&mathtime=" + topicTime["maths"];
//     x += "&gktime=" + topicTime["gk"];

//     x += "&phymark=" + parseInt(obj["physics"]);
//     x += "&chemmark=" + parseInt(obj["chemistry"]);
//     x += "&mathmark=" + parseInt(obj["maths"]);
//     x += "&gkmark=" + parseInt(obj["gk"]);

//     var xhr = new XMLHttpRequest();
//     xhr.open("GET", "pushResult.php?"+x, true);
//     xhr.onreadystatechange = function() {
//         if(xhr.readyState == 4 && xhr.status == 200) {
//             console.log(xhr.responseText);
//         }
//     }
//     xhr.send(x);

//     console.log(x);
// }


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
            finalizeAnswer(answer);
        }
    }
    if(flag == 0) {
        alert("Please select an answer");
    }
} 

function finalizeAnswer(answer) {
    var question = document.getElementsByClassName('q-circle')[(currentQuestion-1)];
    question.classList.remove("question-selected");
    question.classList.add("question-done");

    var index = questionArray.indexOf(currentQuestion);
    var nextQ;

    console.log("index="+index);
    questionArray.splice(questionArray.indexOf(currentQuestion),1);
    console.log(questionArray);

    if(document.getElementsByClassName('q-circle')[questionArray[index]] == undefined) {
        nextQ = document.getElementsByClassName('q-circle')[(questionArray[0]-1)];
    }
    else   
        nextQ = document.getElementsByClassName('q-circle')[(questionArray[index]-1)];
    console.log(nextQ);


    var xhr = new XMLHttpRequest();
    var x = "&slno="+currentQuestion+"&topic="+currentTopic+"&ans="+answer+"&user="+user;
    xhr.open('GET', 'addResult.php?'+x, true);
    xhr.onreadystatechange = function() {
        if(xhr.readyState == 4 && xhr.status == 200) {
            console.log(xhr.responseText);
            if(questionArray.length != 0)
                selectQuestion(nextQ);
        }
    }
    xhr.send(x);
}