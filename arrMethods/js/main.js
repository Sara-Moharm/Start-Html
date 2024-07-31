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

let courseMaterial = ["HTML", "CSS", "JS"];

courseMaterial.push("Bootstrap", "React");
courseMaterial.pop();

console.log(courseMaterial);

courseMaterial.unshift("Tailwind");
courseMaterial.shift();

console.log(courseMaterial);
