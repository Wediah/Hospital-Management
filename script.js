const time = new Date().getHours();
let greeting;
if (time < 10) {
  greeting = "Good morning!";
} else if (time < 20) {
  greeting = "Good afternoon!";
} else {
  greeting = "Good evening!";
}

document.addEventListener("DOMContentLoaded", () => {document.getElementById("greeting").innerHTML = greeting;})


