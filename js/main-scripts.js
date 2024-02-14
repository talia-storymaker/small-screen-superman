function populateIntextFigcaptions() {
  var intextFigures = document.querySelectorAll("figure.intext");
  for (var intextFigure of intextFigures) {
    intextFigure.lastChild.innerHTML = intextFigure.firstChild.firstChild.alt;
  }
}

function displayGalleryImage(event) {
  event.preventDefault();
  displayAnyGalleryImage(this);
}

function displayAnyGalleryImage(clicked) {
  document.getElementById('galleryselection').className = "galleryselection";
  var fullSizeImage = clicked.href;
  var selectedImage = clicked.querySelector("img");
  document.querySelector("div.galleryselection figure a").href = fullSizeImage;
  document.querySelector("div.galleryselection figure a").id = clicked.id.replace("able", "ed");
  document.querySelector("div.galleryselection figure img").src = fullSizeImage;
  document.querySelector("div.galleryselection figure img").alt = selectedImage.alt;
  document.querySelector("div.galleryselection figure figcaption").innerHTML = selectedImage.alt;
}

function closeGallerySelection(click) {
  if (!document.getElementById("galleryselection").className.includes("invisible") && click.target.parentNode.tagName != ("FIGURE") && click.target.src === undefined) {
    document.getElementById("galleryselection").className += " invisible"; 
    document.querySelector("div.galleryselection figure img").src = "";
  }
}

function addImageNumberIds() {
  var number = 1;
  for (var i = 0; i < document.querySelectorAll("figure.intext a").length; i++) {
    document.querySelectorAll("figure.intext a")[i].id = "selectableimage" + number;
    number += 1;
  }
  for (var i = 0; i < document.querySelectorAll("div.gallery a").length; i++) {
    document.querySelectorAll("div.gallery a")[i].id = "selectableimage" + number;
    number += 1;
  }
}

function scrollThroughImages(direction) {
  var directionNumber;
  var currentImageIdNumber = parseInt(document.querySelector("div.galleryselection figure a").id.slice(13));
  console.log("thing", (document.querySelector("div.galleryselection figure a")))
  if (direction === "left") {
    directionNumber = -1;
  }
  if (direction === "right") {
    directionNumber = 1;
  }
  if (document.getElementById("selectableimage" + (currentImageIdNumber + directionNumber))) {
    displayAnyGalleryImage(document.getElementById("selectableimage" + (currentImageIdNumber + directionNumber)));
  }
}

function toggleMenu() {
  if (document.getElementById("mainnav").style.display != "block") {
    document.getElementById("mainnav").style.display = "block";
    document.getElementById("close-menu").style.display = "inline";
    document.getElementById("open-menu").style.display = "none";
  } else {
    document.getElementById("mainnav").style.display = "";
    document.getElementById("close-menu").style.display = "none";
    document.getElementById("open-menu").style.display = "inline";
  }
}

if (window.innerWidth >= 1024 && document.getElementsByClassName("side-controls")[0]) {
  document.getElementsByClassName("side-controls")[0].setAttribute("open", "");
}

for (var i = 0; i < document.querySelectorAll("div.gallery a").length; i++) {
  document.querySelectorAll("div.gallery a")[i].addEventListener("click", displayGalleryImage, true);
}
for (var i = 0; i < document.querySelectorAll("figure.intext a").length; i++) {
  document.querySelectorAll("figure.intext a")[i].addEventListener("click", displayGalleryImage, true);
}
window.addEventListener("click", closeGallerySelection, false);
addImageNumberIds();
populateIntextFigcaptions();
