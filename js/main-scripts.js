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

for (var i = 0; i < document.querySelectorAll("div.gallery a").length; i++) {
  document.querySelectorAll("div.gallery a")[i].addEventListener("click", displayGalleryImage, true);
}
for (var i = 0; i < document.querySelectorAll("figure.intext a").length; i++) {
  document.querySelectorAll("figure.intext a")[i].addEventListener("click", displayGalleryImage, true);
}
window.addEventListener("click", closeGallerySelection, false);
addImageNumberIds();
populateIntextFigcaptions();

var jumpList = document.getElementById("side-controls-list");
if (document.getElementById("summary")) {
	var summaryEntryLi = document.createElement("li");
	var summaryEntryA = document.createElement("a");
	var summaryEntryText = document.createTextNode("Summary");
	summaryEntryA.href = "#summary";
	summaryEntryA.appendChild(summaryEntryText);
	summaryEntryLi.appendChild(summaryEntryA);
	jumpList.appendChild(summaryEntryLi);
}
if (document.getElementById("synopsis")) {
	var synopsisEntryLi = document.createElement("li");
	var synopsisEntryA = document.createElement("a");
	var synopsisEntryText = document.createTextNode("Synopsis");
	synopsisEntryA.href = "#synopsis";
	synopsisEntryA.appendChild(synopsisEntryText);
	synopsisEntryLi.appendChild(synopsisEntryA);
	jumpList.appendChild(synopsisEntryLi);
}
if (document.getElementById("notes")) {
	var notesEntryLi = document.createElement("li");
	var notesEntryA = document.createElement("a");
	var notesEntryText = document.createTextNode("Notes");
	notesEntryA.href = "#notes";
	notesEntryA.appendChild(notesEntryText);
	notesEntryLi.appendChild(notesEntryA);
	jumpList.appendChild(notesEntryLi);
}
if (document.getElementById("review")) {
	var reviewEntryLi = document.createElement("li");
	var reviewEntryA = document.createElement("a");
	var reviewEntryText = document.createTextNode("Review");
	reviewEntryA.href = "#review";
	reviewEntryA.appendChild(reviewEntryText);
	reviewEntryLi.appendChild(reviewEntryA);
	jumpList.appendChild(reviewEntryLi);
}
if (document.getElementById("gallery")) {
	var galleryEntryLi = document.createElement("li");
	var galleryEntryA = document.createElement("a");
	var galleryEntryText = document.createTextNode("Gallery");
	galleryEntryA.href = "#gallery";
	galleryEntryA.appendChild(galleryEntryText);
	galleryEntryLi.appendChild(galleryEntryA);
	jumpList.appendChild(galleryEntryLi);
}
if (document.getElementById("links")) {
	var linksEntryLi = document.createElement("li");
	var linksEntryA = document.createElement("a");
	var linksEntryText = document.createTextNode("Links");
	linksEntryA.href = "#links";
	linksEntryA.appendChild(linksEntryText);
	linksEntryLi.appendChild(linksEntryA);
	jumpList.appendChild(linksEntryLi);
}
