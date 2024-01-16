var galleryImages = document.getElementsByClassName('gallery-item');
for (var i = 0; i < galleryImages.length; i++) {
	galleryImages[i].alt = galleryImages[i].src.split("/").pop().slice(7, -4).replace(/_/g, ' ').replace("COLON", ":");
}