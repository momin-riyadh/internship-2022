/*
// one
function panic(str){
  return str
    .split(' ')
    .join(' 😱 ')
    .toUpperCase() + "!"
}

console.log(panic("I missed the lantern rite event"))
console.log(panic("I have to finish my applications"))
*/


/*
// two
function whisper(str){

  if (str.endsWith("!")){
    return "shh... " + str.slice(0, -1).toLowerCase();
  } else {
    return "shh... " + str.toLowerCase();
  }
}

console.log(whisper("PLEASE STOP SHOUTING."))
console.log(whisper("MA'AM, this is a Wendy's!"));
*/


/*
// three
function altCaps(str){
  let newStr = ""

  for (let i = 0; i < str.length; i++){
    if (i % 2 === 0){
      newStr += str[i].toUpperCase()
    } else {
      newStr += str[i]
    }
  }
  return newStr;
}

console.log(altCaps("When you visit Portland you have to go to VooDoo Donuts"))
*/


/*
// four
function capitalizeWord(word){
  return word[0].toUpperCase() + word.slice(1);
}

function toTitleCase(str){
  const sentenceArr = str.split(' ');
  const capArr = sentenceArr.map(word => capitalizeWord(word));
  return capArr.join(' ');
}

console.log(capitalizeWord("mango"))
console.log(toTitleCase("pumpkin pranced purposefully across the pond"))
*/


// five

function awardBonuses(){
  for (let i = 1; i <= 100; i++){
    if (i % 5 === 0 && i % 3 === 0)
    {
      console.log(i + "- JACKPOT! 1 Million and a Yacht!")
    } else if (i % 5 === 0)
    {
      console.log(i + "- $100,000 bonus!")
    } else if (i % 3 === 0)
    {
      console.log(i + "- Vacation!")
    } else {
      console.log(i + "- :(")
    }
  }
}

awardBonuses()
