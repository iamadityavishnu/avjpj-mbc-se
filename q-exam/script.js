var answer = null;

function findAns() {
    var a = document.getElementsByName('ans');
    for(let i=0; i<4; i++) {
        if(a[i].checked) {
            answer = a[i].value;
            console.log(answer);
        }
    }
}

//Check and add
function add(arr, name) {
  const { length } = arr;
  const id = length + 1;
  const found = arr.some(el => el.username === name);
  if (!found) arr.push({ id, username: name });
  return arr;
}