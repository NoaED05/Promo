function convertFromBinary() {
  
  const decnumber = document.getElementById("numBinary").value.toString();
  
  let sum = 0;
  
  for (let i=0; i<decnumber.length; i++){
    
  sum += parseInt(decnumber[i]) * 2**(decnumber.length-1-i);

}
//console.log(sum);
document.getElementById("pDecimal").innerHTML = sum;

  }

