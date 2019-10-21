/*alert("Hello World!")
let value = "an arbitrary string";
let num = Number(value)
alert(typeof num)
alert('01'===1)
let age = prompt('How old are you?',100);
alert('You are '+age+' years old');
result = confirm("Are you a man?")
/*if (result == true)
{
  alert("Hoorah You are a man!");
}
else {
  alert("Shame on your existence");
}*/
//let message = (result==true) ? "Proud of you":"Shame on you!";
//Using switch case statements
function number(a){
  switch (a) {
    case '0':
      alert(0);
      break;
    case '1':
      alert(1);
      break;
    case ('2'||'3'):
      alert('2,3');
      break;
    default:
      break;
  }
}
//let a = prompt('a?',100);
//number();
let body = document.getElementsByTagName('body');
let text = document.getElementById('text_01');
body.style.color = "red";
text.style.color = "red";
function myFunction(){
  alert("Hello!");
}
