var dropDown;
var i;
function indicateSelected() {
  for (i in document.querySelectorAll('nav ul li')) {
    document.querySelectorAll('nav ul li')[i].className = '';
  }
  selectedItem = this;
  selectedItem.className = 'selected-nav-item';
}

function indicateNoneSelected() {
  for (i in document.querySelectorAll('nav ul li')) {
    document.querySelectorAll('nav ul li')[i].className = '';
  }
  document.getElementById('dropdown').innerHTML = "";
}

function populateIntextFigcaptions() {
  var intextFigures = document.querySelectorAll("figure.intext");
  for (i = 0; i < intextFigures.length; i++) {
    intextFigures[i].lastChild.innerHTML = intextFigures[i].firstChild.alt;
  }
}

function displayGalleryImage() {
  displayAnyGalleryImage(this);
}

function displayAnyGalleryImage(selectedImage) {
  document.getElementById('galleryselection').className = "galleryselection";
  var fullSizeImage = selectedImage.src.replace("/thumbs", "");
  document.querySelector("div.galleryselection figure img").src = fullSizeImage;
  document.querySelector("div.galleryselection figure img").id = selectedImage.id.replace("able", "ed");
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
  for (var i = 0; i < document.querySelectorAll("figure.intext img").length; i++) {
    document.querySelectorAll("figure.intext img")[i].id = "selectableimage" + number;
    number += 1;
  }
  for (var i = 0; i < document.querySelectorAll("div.gallery img").length; i++) {
    document.querySelectorAll("div.gallery img")[i].id = "selectableimage" + number;
    number += 1;
  }
}

function scrollThroughImages(direction) {
  var directionNumber;
  var currentImageIdNumber = parseInt(document.querySelector("div.galleryselection figure img").id.slice(13));
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

document.getElementsByTagName("main")[0].addEventListener("mouseover", indicateNoneSelected, false);
for (var i = 0; i < document.querySelectorAll(".mainnav > li").length; i++) {
  document.querySelectorAll(".mainnav > li")[i].addEventListener("mouseover", indicateSelected, false);
}
for (var i = 0; i < document.querySelectorAll("div.gallery img").length; i++) {
  document.querySelectorAll("div.gallery img")[i].addEventListener("click", displayGalleryImage, false);
}
for (var i = 0; i < document.querySelectorAll("figure.intext img").length; i++) {
  document.querySelectorAll("figure.intext img")[i].addEventListener("click", displayGalleryImage, false);
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