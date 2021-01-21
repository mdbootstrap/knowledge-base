// 9. Spread syntax

let dogs = ["Charlie", "Cooper", "Max"];

"❌ A bad way ❌";

dogs.push("Lucy");
dogs.push("Daisy")

"✅ A good way ✅";

// Push:
dogs = [...dogs, "Lucy", "Daisy"];

// Shift
dogs = ["Lucy", ...dogs, "Daisy"]

// Unshift
dogs = ["Lucy", "Daisy", ...dogs];
