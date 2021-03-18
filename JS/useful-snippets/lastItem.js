function lastItem(list) {
  if (Array.isArray(list)) {
    return list.slice(-1)[0];
  }

  if (list instanceof Set) {
    return Array.from(list).slice(-1)[0];
  }

  if (list instanceof Map) {
    return Array.from(list.values()).slice(-1)[0];
  }
}

// Array
// var cars = ["Saab", "Volvo", "BMW"];

// Set
// let mySet = new Set();
// mySet.add(1); // Set [ 1 ]
// mySet.add(5); // Set [ 1, 5 ]
// mySet.add(5); // Set [ 1, 5 ]
// mySet.add("some text"); // Set [ 1, 5, 'some text' ]
// let o = { a: 1, b: 2 };
// mySet.add(o);

// Map
// let map = new Map();
// map.set('1', 'str1');   // a string key
// map.set(1, 'num1');     // a numeric key
// map.set(true, 'bool1'); // a boolean key
