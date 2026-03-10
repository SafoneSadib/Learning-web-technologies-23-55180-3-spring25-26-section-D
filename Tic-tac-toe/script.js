let cells = document.querySelectorAll(".cell");
let status = document.getElementById("status");

let player = "X";
let game = true;

let win = [
  [0,1,2],[3,4,5],[6,7,8],
  [0,3,6],[1,4,7],[2,5,8],
  [0,4,8],[2,4,6]
];

for (let i = 0; i < 9; i++) {
  cells[i].onclick = function() {
    if (!game || cells[i].innerHTML != "") return;
    cells[i].innerHTML = player;

    for (let w = 0; w < win.length; w++) {
      let a = cells[win[w][0]].innerHTML;
      let b = cells[win[w][1]].innerHTML;
      let c = cells[win[w][2]].innerHTML;

      if (a!="" && a==b && b==c) {
        status.innerHTML = "Player " + player + " Wins!";
        cells[win[w][0]].style.background="lightgreen";
        cells[win[w][1]].style.background="lightgreen";
        cells[win[w][2]].style.background="lightgreen";
        game = false;
        return;
      }
    }

    let draw = true;
    for (let j = 0; j < 9; j++) if(cells[j].innerHTML=="") draw=false;
    if(draw){ status.innerHTML="It's a Draw!"; game=false; return; }

    player = (player=="X")?"O":"X";
    status.innerHTML = "Player " + player + " Turn";
  }
}

function resetGame(){
  for (let i = 0; i < 9; i++){
    cells[i].innerHTML="";
    cells[i].style.background="#eee";
  }
  player="X";
  game=true;
  status.innerHTML="Player X Turn";
}
