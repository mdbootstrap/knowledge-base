// 8. String concatenation 

var animal = {
    name: "Bob",
    type: "cat",
    skill: "jumping"
};

"❌ A bad way ❌";

let bio = animal.name + ' is a ' + animal.type + '  skilled in ' + animal.skill;
console.log(bio);


"✅ A good way ✅";

const { name, type, skill } = animal;
bio = `${name} os a ${type} skilled in ${skill}`;
console.log(bio);

