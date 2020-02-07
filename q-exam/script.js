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

initTask();

function initTask() {
    createQuestionList();
    fetchQuestion('physics', 1);

}

function createQuestionList() {
    //  Receive number of questions
    var n = 10;     //  No. of Questions
    var questionList = document.getElementById('question-list');

    for(let i=1; i<=n; i++) {
        let div = document.createElement("DIV");
        div.setAttribute("id", i);
        div.classList.add('q-circle');
        div.innerHTML = i;
        questionList.appendChild(div);
        
        if(i<10) {
            let line = document.createElement("DIV");
            line.classList.add('line-next');
            questionList.appendChild(line);
        }
    }
}

function fetchQuestion(subject) {
    var qTarget = document.getElementById('question-target'), 
        op1Target = document.getElementById('op1'), 
        op2Target = document.getElementById('op2'), 
        op3Target = document.getElementById('op3'), 
        op4Target = document.getElementById('op4');

    var x = "subject="+subject;

    var xhr = new XMLHttpRequest();
    xhr.open("GET", "php/fetchQuestion.php", true);
    xhr.onreadystatechange = function() {
        if(xhr.readyState == 4 && xhr.status == 200) {
            console.log(xhr.response);
        }
    }
    xhr.send(subject);
}


//  Check and add
function add(arr, name) {
  const { length } = arr;
  const id = length + 1;
  const found = arr.some(el => el.username === name);
  if (!found) arr.push({ id, username: name });
  return arr;
}