<script>
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
</script>