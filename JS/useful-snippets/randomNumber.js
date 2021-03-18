function randomNumber(max = 1, min = 0) {
  if (min >= max) {
    return max;
  }

  return Math.floor(Math.random() * (max - min) + min);
}
