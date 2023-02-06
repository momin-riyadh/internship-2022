let myLeads = []
let oldLeads = []

const inputEl = document.getElementById("input-el")
const inputBtn = document.getElementById("input-btn")
const deleteBtn = document.getElementById("delete-btn")
const ulEl = document.getElementById("ul-el")

const leadsFromLocStrg = JSON.parse(localStorage.getItem("myLeads"))

if(leadsFromLocStrg){
    myLeads = leadsFromLocStrg
    renderLeads(myLeads)
}

function renderLeads(){
    let listItems = ""

    for (let i = 0; i < myLeads.length; i++){
        listItems += `
            <li>
                <a target='_blank' href='${myLeads[i]}'>
                    ${myLeads[i]}
                </a>
            </li>
        `

    }

    ulEl.innerHTML = listItems
}

deleteBtn.addEventListener("dblclick", function (){
    localStorage.clear()
    myLeads = []
    renderLeads()
})

inputBtn.addEventListener("click", function (){
    myLeads.push(inputEl.value)
    inputEl.value = ""
    localStorage.setItem("myLeads", JSON.stringify(myLeads))
    
    renderLeads()
    
    console.log(localStorage.getItem("myLeads"))
})



