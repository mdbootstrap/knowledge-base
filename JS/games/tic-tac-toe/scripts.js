const boxes = document.querySelectorAll(".box");

const restart = document.getElementById("restart");

const WINNIG_SCHEME = [
  [0, 1, 2],
  [3, 4, 5],
  [6, 7, 8],
  [0, 3, 6],
  [1, 4, 7],
  [2, 5, 8],
  [0, 4, 8],
  [2, 4, 6],
];

const O = "O";
const X = "X";

let currentPlayer = O;
const board = new Array(9).fill(null);

const boxClicked = (e) => {
  const id = e.target.id;

  if (!board[id]) {
    board[id] = currentPlayer;
    e.target.innerText = currentPlayer;
    if (checkLine2()) endGame();
    if (!board.some((e) => e === null)) endGame("draw");

    currentPlayer = currentPlayer === O ? X : O;
  }
};

const endGame = (result) => {
  intro.innerText = result == "draw" ? "Draw!" : currentPlayer + " has won!";
  boxes.forEach((box) => box.removeEventListener("click", boxClicked));
};

const restartGame = () => {
  currentPlayer = O;
  board.fill(null);
  boxes.forEach((box) => {
    box.innerText = "";
  });

  intro.innerText = "Let's play!";
  boxes.forEach((box) => box.addEventListener("click", boxClicked));
};

const checkLine = () => {
  /* WINNING COMBINATION 

0,1,2
3,4,5
6,7,8
0,3,6
1,4,7
2,5,8,
0,4,8,
2,4,6

*/

  //Top line = [0,1,2]
  if (currentPlayer == board[0] && board[0] == board[1] && board[1] == board[2])
    return true;
  //Middle line = [3,4,5]
  if (currentPlayer == board[3] && board[3] == board[4] && board[3] == board[5])
    return true;
  //Bottom line = [6,7,8]
  if (currentPlayer == board[6] && board[6] == board[7] && board[6] == board[8])
    return true;
  //Left column = [0,3,6]
  if (currentPlayer == board[0] && board[0] == board[3] && board[0] == board[6])
    return true;
  //Middle column = [1,4,7]
  if (currentPlayer == board[1] && board[1] == board[4] && board[1] == board[7])
    return true;
  //Right column = [2,5,8]
  if (currentPlayer == board[2] && board[2] == board[5] && board[2] == board[8])
    return true;
  //Slash diagonal = [0,4,8]
  if (currentPlayer == board[0] && board[0] == board[4] && board[0] == board[8])
    return true;
  //Backslash diagonal = [2,4,6]
  if (currentPlayer == board[2] && board[2] == board[4] && board[2] == board[6])
    return true;

  return false;
};

const checkLine2 = () => {
  return WINNIG_SCHEME.some((combination) => {
    if (
      currentPlayer == board[combination[0]] &&
      board[combination[0]] == board[combination[1]] &&
      board[combination[0]] == board[combination[2]]
    )
      return true;

    return false;
  });
};

boxes.forEach((box) => box.addEventListener("click", boxClicked));
restart.addEventListener("click", restartGame);
