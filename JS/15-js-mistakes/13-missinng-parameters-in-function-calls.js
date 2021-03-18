// 13. Missing parameters in function calls

"❌ A bad way ❌";

function sum(num1, num2) {
  console.log(num2 + num1);
}

sum(2,3) //5
sum(); //NaN


"✅ A good way ✅";

function sum(num1 = 0, num2 = 0) {
  console.log(num2 + num1);
}

sum(2,3) //5
sum(); //0

// Better - check this video
// https://www.youtube.com/watch?v=M-LwzsBvvJE&feature=youtu.be&ab_channel=MDB-justcodeit
// more hacks like that

function required(argName = "param") {
  throw new Error(`"${argName}" is required`);
}

function iHaveRequiredOptions(arg1 = required("arg1"), arg2 = 10) {
  console.log(arg1, arg2);
}

iHaveRequiredOptions(); // throws "arg1" is required
iHaveRequiredOptions(12); // prints 12, 10
iHaveRequiredOptions(12, 24); // prints 12, 24
iHaveRequiredOptions(undefined, 24); // throws "arg1" is required
