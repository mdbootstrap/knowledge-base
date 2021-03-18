// 14. Array Iterations With ‘for-in’ Loops

"❌ A bad way ❌";

Array.prototype.hello = "hey!";
var array = [1, 2, 3];

for (var i in array) {
  console.log(array[i]);
}

array.length; //3


"✅ A good way ✅";

array.forEach(el => console.log(el))