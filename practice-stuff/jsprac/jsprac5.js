/*
const player = "Farah"
const opponent = "Scara"
const game = "AmazingFighter"
let points = 0
let hasWon = false

points += 100
hasWon = true

if (hasWon) {
  console.log(`${player} got ${points} points and won the ${game} game!`)
} else {
  console.log(`The winner is ${opponent}! ${player} lost the game`)
}
*/


/*let data = [
  {
    player: "Jane",
    score: 52
  },
  {
    player: "Mark",
    score: 41
  }
]

let logBtn = document.getElementById("log-btn")

logBtn.addEventListener("click", function (){
  console.log(data[0].score)
})*/


let countries = ["China", "India", "USA"]
let desc = "largest countries"

function generateSentence(desc, arr){
  let baseStr = `The ${arr.length} ${desc} are `
  const lastIndex = arr.length - 1
  for (let i = 0; i < arr.length; i++){
    if (i === lastIndex){
      baseStr += arr[i]
    } else {
      baseStr += arr[i] + ", "
    }
  }
  return baseStr
}

const sentence = generateSentence(desc,countries)
console.log(sentence)
