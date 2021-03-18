//Swap Array VAlue places
function swap(arr, i, j) {
  let arrayCopy = [...arr];

  [arrayCopy[i], arrayCopy[j]] = [arrayCopy[j], arrayCopy[i]];

  return arrayCopy;
}

// let array = [12, 24, 48, 96];
