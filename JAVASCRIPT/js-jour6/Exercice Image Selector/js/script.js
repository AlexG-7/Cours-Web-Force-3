var photos = document.querySelectorAll("#photo-list li");
var clic = document.querySelector("span");
var nbPhotosSelected = document.querySelectorAll("li.selected").length;

function onClickImg() {
  this.classList.toggle("selected");

  var nbPhotosSelected = document.querySelectorAll("li.selected").length;
  document.querySelector("p#total span").textContent = nbPhotosSelected;
}

for (var index = 0; index < photos.length; index++) {
  photos[index].addEventListener("click", onClickImg);
}