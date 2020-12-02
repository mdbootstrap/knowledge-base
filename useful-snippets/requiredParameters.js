function required(argName = "param") {
  throw new Error(`"${argName}" is required`);
}

function iHaveRequiredOptions(arg1 = required("arg1"), arg2 = 10) {
  console.log(arg1, arg2);
}

// iHaveRequiredOptions(); // throws "arg1" is required
// iHaveRequiredOptions(12); // prints 12, 10
// iHaveRequiredOptions(12, 24); // prints 12, 24
// iHaveRequiredOptions(undefined, 24); // throws "arg1" is required
