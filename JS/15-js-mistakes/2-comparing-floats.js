// 2. Comparing floats

"❌ A bad way ❌";

0.3 + 0.6   // 0.8999999999999999

(0.3 + 0.6) == 0.9 // false

"✅ A good way ✅";

// Option 1
// Compare float numbers with precision:

var precision = 0.001;

if (Math.abs(n1 - n2) <= precision) {
  // equal
}
else {
  // not equal
}

//You can also use Number.EPSIlON instead of defining yours

// Option 2 
// Use round and parseFloat

Math.round(parseFloat(0.3 +0.6, 2)*100)/100 

// Option 3 
// Use library
// http://mikemcl.github.io/decimal.js/
// The decimal.js library provides an arbitrary-precision Decimal type for JavaScript.

0.3 - 0.1                     // 0.19999999999999998
x = new Decimal(0.3)
x.minus(0.1)                  // '0.2'


