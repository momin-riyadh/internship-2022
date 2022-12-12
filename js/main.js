

function altCaps(str){
  let newStr = ""

  for (let i = 0; i < str.length; i++){
    if (i % 2 === 0){
      newStr += str.charAt(i).toUpperCase()
    } else {
      newStr += str.charAt(i).toLowerCase()
    }
  }

  return newStr;
}

console.log(altCaps("When you visit Portland you have to go to VooDoo Donuts"));
