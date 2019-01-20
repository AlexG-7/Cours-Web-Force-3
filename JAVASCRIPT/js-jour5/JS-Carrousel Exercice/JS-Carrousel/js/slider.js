"use strict"; // Mode strict du JavaScript

/***********************************************************************************/
/* ********************************* DONNEES CARROUSEL *****************************/
/***********************************************************************************/
// La liste des slides du carrousel.
var slides = [
  { image: "images/1.jpg", legend: "Street Art" },
  { image: "images/2.jpg", legend: "Fast Lane" },
  { image: "images/3.jpg", legend: "Colorful Building" },
  { image: "images/4.jpg", legend: "Skyscrapers" },
  { image: "images/5.jpg", legend: "City by night" },
  { image: "images/6.jpg", legend: "Tour Eiffel la nuit" }
];

/***********************************************************************************/
/* ******************************** FONCTIONS CARROUSEL ****************************/
/***********************************************************************************/

/***********************************************************************************/
/* ******************************** CODE PRINCIPAL *********************************/
/***********************************************************************************/
var toolbarLink = document.querySelector("#toolbar-toggle");
var toolbar = document.querySelector("ul");

var index = 0;
var timer= 0;

var title = document.querySelector("figcaption");
var img = document.querySelector("img");

var nextButton = document.querySelector("#slider-next");
var previousButton = document.querySelector("#slider-previous");
var randomButton = document.querySelector("#slider-random");
var playPauseButton = document.querySelector("#slider-toggle");

function toolbarToggle(event) {
  event.preventDefault();
  console.log(event);
  toolbar.classList.toggle("hide");
}

function previousImage() {
  if (index == 0) {
    index = slides.length - 1;
  } else {
    index = index - 1;
  }
  title.textContent = slides[index].legend;
  img.src = slides[index].image;
}
function playStop() {
  if (timer == 0) {
    timer = setInterval(nextImage, 2000);


  } else {
    clearInterval(timer);
    timer=0;
  }
}

function nextImage() {
  if (index == slides.length - 1) {
    index = 0;
  } else {
    index = index + 1;
  }
  title.textContent = slides[index].legend;
  img.src = slides[index].image;
}

function randomImage() {
  index = getRandomInt(0, slides.length - 1);

  title.textContent = slides[index].legend;
  img.src = slides[index].image;
}

function getRandomInt(min, max) {
  min = Math.ceil(min);
  max = Math.floor(max);
  return Math.floor(Math.random() * (max - min+1)) + min;
}

toolbarLink.addEventListener("click", toolbarToggle);

nextButton.addEventListener("click", nextImage);
previousButton.addEventListener("click", previousImage);
randomButton.addEventListener("click", randomImage);
playPauseButton.addEventListener("click", playStop);
