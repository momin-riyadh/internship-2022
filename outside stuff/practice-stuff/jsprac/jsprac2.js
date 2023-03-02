let num1 = 5
let num2 = 2
document.getElementById("num1-el").textContent = num1
document.getElementById("num2-el").textContent = num2

let sumEl = document.getElementById("sum-el")

function add(){
    let sum = num1 + num2
    sumEl.textContent = "Sum: " + sum
}

function sub(){
    let sum = num1 - num2
    sumEl.textContent = "Sum: " + sum
}

function div(){
    let sum = num1 / num2
    sumEl.textContent = "Sum: " + sum
}

function mul(){
    let sum = num1 * num2
    sumEl.textContent = "Sum: " + sum
}