let body = document.body;
//   input1 = document.querySelector(".input1"),
//   input2 = document.querySelector(".input2");

let inputs = document.querySelectorAll("input");

function changeBackgroundColor() {
  body.style.background = `linear-gradient(to right, ${inputs[0].value}, ${inputs[1].value})`;
}

for (let col of inputs) {
  col.addEventListener("input", changeBackgroundColor);
}
// input1.addEventListener("input", changeBackgroundColor);
// input2.addEventListener("input", changeBackgroundColor);
