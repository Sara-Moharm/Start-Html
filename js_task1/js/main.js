// 1) ==================== Even Or Odd Number ======================
let userNumber = Number(prompt("Enter a number to check: "));
if (userNumber % 2 === 0) console.log(`${userNumber} Is Even`);
else console.log(`${userNumber} Is Odd`);

// 2) ==================== Fizz Buzz Game ==========================
for (let i = 0; i <= 15; i++) {
  if (i % 3 === 0 && i % 5 === 0) console.log("FizzBuzz");
  else if (i % 3 === 0) console.log("Fizz");
  else if (i % 5 === 0) console.log("Buzz");
  else console.log(i);
}

// 3) =================== Compute Circle Area And Circumference ===================
let circleRadius = Number(prompt("Enter a radius value: "));

function circleArea(radius) {
  return Math.PI * Math.pow(radius, 2);
}

function circleCircumference(radius) {
  return 2 * Math.PI * radius;
}

console.log(`The Circle Area Is ${circleArea(circleRadius).toFixed(3)}`);
console.log(
  `The Circle Circumference Is ${circleCircumference(circleRadius).toFixed(3)}`
);

// 4) ==================== Positive Or Negative Number =============================
let checkNumber = Number(prompt("Enter a number to check: "));
if (checkNumber > 0) console.log(`${checkNumber} Is Positive`);
else console.log(`${checkNumber} Is Negative`);

// 5) ==================== Print The Sum Of Two Numbers ============================

let num1 = Number(prompt("Enter the first number: "));
let num2 = Number(prompt("Enter the second number: "));

function sumTwoNumbers(num1, num2) {
  return num1 + num2;
}

console.log(`The sum of ${num1} and ${num2} is ${sumTwoNumbers(num1, num2)}`);
