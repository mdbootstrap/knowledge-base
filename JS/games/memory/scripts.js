const cards = document.querySelectorAll(".card");
const counter = document.querySelector(".moves");
const timer = document.querySelector(".timer");

let firstCard, secondCard;
let hasFlippedCard = false;
let lockBoard = false;
let pairs = 0,
  moves = 0,
  seconds = 0,
  minutes = 0;

function flipCard() {
  if (lockBoard) return;
  if (this === firstCard) return;

  this.classList.add("flip");
  moveCounter();

  if (!hasFlippedCard) {
    firstCard = this;
    hasFlippedCard = true;
    return;
  }

  secondCard = this;
  lockBoard = true;

  checkForMatch();
}

function checkForMatch() {
  let isMatch = firstCard.dataset.tech === secondCard.dataset.tech;

  isMatch ? disableCards() : unflipCards();
}

function disableCards() {
  firstCard.removeEventListener("click", flipCard);
  secondCard.removeEventListener("click", flipCard);

  pairs++;

  if (pairs == 6) endGame();

  resetBoard();
}

function unflipCards() {
  setTimeout(() => {
    firstCard.classList.remove("flip");
    secondCard.classList.remove("flip");

    resetBoard();
  }, 1000);
}

function resetBoard() {
  [hasFlippedCard, lockBoard] = [false, false];
  [firstCard, secondCard] = [null, null];
}

(function shuffle() {
  cards.forEach((card) => {
    let randomPos = Math.floor(Math.random() * 12);
    card.style.order = randomPos;
  });
})();

function endGame() {
  setTimeout(() => {
    stopTimer();
    alert(`You won in ${moves} moves!`);
  }, 300);
}

function moveCounter() {
  moves++;
  counter.innerHTML = moves;

  if (moves == 1) {
    startTimer();
  }
}

function startTimer() {
  interval = setInterval(() => {
    timer.innerHTML = minutes + "mins " + seconds + "secs";
    seconds++;
    if (seconds == 60) {
      minutes++;
      seconds = 0;
    }
  }, 1000);
}

function stopTimer() {
  clearInterval(interval);
}

cards.forEach((card) => card.addEventListener("click", flipCard));
