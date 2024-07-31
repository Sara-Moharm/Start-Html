let salary = Number(prompt("Enter yor salary: "));

function netSalary(salary) {
  return salary - salary * 0.1;
}

console.log(netSalary(1000));
