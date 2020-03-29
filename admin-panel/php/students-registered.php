<script>
    var studentList = [], studentsPerPage=13, currentPage=1;
    var studentDivTemplate = document.createElement("DIV");
    let slno = document.createElement("DIV"),
        name = document.createElement("DIV"),
        email = document.createElement("DIV"),
        phone = document.createElement("DIV"),
        mark = document.createElement("DIV");
    slno.setAttribute("class", "slno-div");
    name.setAttribute("class", "name-div");
    email.setAttribute("class", "email-div");
    phone.setAttribute("class", "phone-div");

    mark.setAttribute("class", "mark-div");
    let input = document.createElement("INPUT");
    input.setAttribute("type", "checkbox");
    mark.appendChild(input);

    studentDivTemplate.setAttribute("class", "student-wrapper");
    studentDivTemplate.appendChild(slno);
    studentDivTemplate.appendChild(name);
    studentDivTemplate.appendChild(email);
    studentDivTemplate.appendChild(phone);
    studentDivTemplate.appendChild(mark);
    console.log(studentDivTemplate);
</script>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registered Students</title>
    <link rel="stylesheet" href="../css/students-registered-style.css">
</head>
<?php
    include '../../dbConnect.php';
?>
<script>
    var user = <?php include 'adminSession.php'; ?>[1];
</script>
<?php
    $var_sql = mysql_query('SELECT * FROM student_details WHERE approval_status=0');
    $i=1;
    while($row = mysql_fetch_array($var_sql)) {
        $arr["slno"] = $i;
        $arr["name"] = $row[1];
        $arr["email"] = $row[2];
        $arr["phone"] = $row[3];
?>
    <script>
        studentList.push(<?php echo json_encode($arr) ?>);
    </script>
<?php
    $i++;
    }
?>
<body>
    <div class="container">
        <div class="header">
            <img src="../../img/logo/mbc-logo-expanded.png" alt="mbc-logo">
            <span id="user"></span>
        </div>
        <div class="body-container" id="target"></div>

        <div class="change-btn">
            <button class="prev-btn" onclick="changePage('-')">&lt;&lt;Prev</button>
            <button class="submit-btn" onclick="submitApproval()">Submit</button>
            <button class="next-btn" onclick="changePage('+')">Next&gt;&gt;</button>
        </div>
    </div>
</body>
</html>

<script>
    window.onload = function() {
        document.getElementById("user").innerHTML = user;
        // console.log(studentList);
        displayContent();
    }
    
    function displayContent() {
        var target = document.getElementById("target");
        target.innerHTML = "";

        let tempDiv = studentDivTemplate.cloneNode(true);
        tempDiv.childNodes[0].innerHTML = "Sl No.";
        tempDiv.childNodes[1].innerHTML = "Name";
        tempDiv.childNodes[2].innerHTML = "Email";
        tempDiv.childNodes[3].innerHTML = "Phone No.";
        tempDiv.childNodes[4].innerHTML = "Approve";
        let inp = document.createElement("INPUT");
        inp.setAttribute("type", "checkbox");
        inp.setAttribute("onclick", "checkAll()");

        tempDiv.childNodes[4].appendChild(inp);
        tempDiv.classList.add("title-container");
        target.appendChild(tempDiv);
        
        for(let x=(currentPage-1)*studentsPerPage; 
                x<(currentPage*studentsPerPage) && x<studentList.length; 
                x++) {
            let div = studentDivTemplate.cloneNode(true);
            
            div.id = studentList[x].email;
            div.childNodes[0].innerHTML = studentList[x].slno;
            div.childNodes[1].innerHTML = studentList[x].name;
            div.childNodes[2].innerHTML = studentList[x].email;
            div.childNodes[3].innerHTML = studentList[x].phone;
            div.childNodes[4].childNodes[0].setAttribute("value", studentList[x].email);
            target.appendChild(div);
        }
    }

    function changePage(str) {
        if(str == '+') {
            if(currentPage<Math.ceil(studentList.length/studentsPerPage))
                currentPage++;
        }
        else 
            if(currentPage>1)
                currentPage--;
        console.log(currentPage);
        displayContent();
    }

    var flag = false;
    function checkAll() {
        if(!flag) 
            flag = true;
        else 
            flag = false;
        
        for(let x=(currentPage-1)*studentsPerPage; 
                x<(currentPage*studentsPerPage) && x<studentList.length; 
                x++) {
            document.getElementById(studentList[x].email).childNodes[4].childNodes[0].checked = flag;
        }
    }

    function submitApproval() {
        let arr = [];
        arr.length = 0;
        for(let x=(currentPage-1)*studentsPerPage; 
                x<(currentPage*studentsPerPage) && x<studentList.length; 
                x++) {
            if(document.getElementById(studentList[x].email).childNodes[4].childNodes[0].checked)
                    arr.push([studentList[x].name, studentList[x].phone, studentList[x].email]);
        }
        console.log(arr);

        var xhr = new XMLHttpRequest(),
            x = JSON.stringify(arr);
        console.log(x);
        xhr.open('GET', 'approveStudents.php?&arr='+x, true);
        xhr.onreadystatechange = function() {
            if(xhr.readyState == 4 && xhr.status == 200) {
                console.log(xhr.responseText);
                window.location = "students-registered.php";
            }
        }
        xhr.send(x);
    }
</script>