const theWord="stianergay";
let noLife = 0;
const maxlifes = 7;
let hint = [];
let userLetters = "";

for (i=0; i<theWord.length; i++){
  hint.push("_");
}

//document.getElementById("phint").innerText = hint;
showhint(hint);

function check() {
  inp = document.getElementById("inpword").value;

  if (inp.length == 1 ){

    for (let i=0; i< theWord.length; i++) {
      if (theWord[i] == inp) {
        hint[i] = inp;
      }
    }
  }



  showhint(hint);
}





function showhint(hint) {
  let toshow = "";
  for (let i=0; i<hint.length; i++) {
    toshow+= hint[i] + " ";
  }
  document.getElementById("phint").innerText = toshow;
}