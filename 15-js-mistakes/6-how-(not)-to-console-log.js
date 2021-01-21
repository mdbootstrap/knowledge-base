// 6. How (not) to console.log

"❌ A bad way ❌";

const a = { name: "tom", age: 20, employed: true };
const b = { name: "john", age: 30, employed: false };
const c = { name: "tom", age: 40, employed: true };

console.log(a);
console.log(b);
console.log(c);

"✅ A good way ✅";

console.log({ a, b, c });
