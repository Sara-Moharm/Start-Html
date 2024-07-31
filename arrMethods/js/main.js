// ------------------------ getNetSalary ----------------------

// let salary = Number(prompt("Enter your salary: "));
// let taxRatio = Number(prompt("Enter your taxRatio: "));

// function getNetSalary(salary, taxRatio) {
// let netSalary = salary - salary * taxRatio;
// console.log(netSalary);
// }

// console.log(getNetSalary(salary,taxRatio));

// ====================== Array Methods =======================

/**
 * Create Array
 * push and pop sush as queue
 * unshift and shift
 */

// let courseMaterial = ["HTML", "CSS", "JS"];

// courseMaterial.push("Bootstrap", "React");
// courseMaterial.pop();

// console.log(courseMaterial);

// courseMaterial.unshift("Tailwind");
// courseMaterial.shift();

// console.log(courseMaterial);

// ====================== For Loop =============================

// let arr = [10, 30, 50, 80, 100];

// for (let i = 0; i <= 4; i++) {
//   console.log(arr[i]);
// }

// console.log("\n\n");

// arr.push(200);

// for (let i = 0; i < arr.length; i++) {
//   console.log(arr[i]);
// }

// ======================== Check Salaries And Double Salary ===========================
let salaries = [10000, 20000, 30000];

let doubleSalaries = [];

// for (let i = 0; i < salaries.length; i++) {
//   doubleSalaries.push(salaries[i] * 2);
// }

// console.log(doubleSalaries);

// for (let salary of salaries) {
//   doubleSalaries.push(salary * 2);
// }

// console.log(doubleSalaries);

let doubleSalary = salaries.map((salary) => {
  return salary * 2;
});

console.log(doubleSalary);
