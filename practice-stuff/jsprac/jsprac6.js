const imgs = [
  "img/hip1.jpg",
  "img/hip2.jpg",
  "img/hip3.jpg",
]

const container = document.getElementById("container")

function renderImages() {
  let imgsDOM = ""
  for (let i = 0; i < imgs.length; i++){
    imgsDOM += `<img alt="comp emp" class="team-img" src="${imgs[i]}">`
  }
  container.innerHTML = imgsDOM
}

renderImages()
