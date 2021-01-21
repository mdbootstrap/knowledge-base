// 7. Object destructuring

"❌ A bad way ❌";

function feed(animal) {
  return `Feed ${animal.name} ${animal.meal} kilos of ${animal.diet}`;
}

"✅ A good way ✅";

function feed({ name, meal, diet }) {
  return `Feed ${name} ${$meal} kilos of ${diet}`;
}

// OR 

function feed(animal) {
  const { name, meal, diet } = animal;
  return `Feed ${name}, ${meal} kilos of ${meal}`;
}