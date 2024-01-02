<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Adventures of Superman: The Case of the Talkative Dummy</title>
		<?php
			include_once $_SERVER['DOCUMENT_ROOT'] . 'head.php';
		?>
	</head>
	<body>
		<?php
			include_once $_SERVER['DOCUMENT_ROOT'] . 'header.php';
		?>
		<main>
		<h1 id="beginning"><span class="seriesname">Adventures of Superman</span><br> Season 1 Episode 3: The Case of the Talkative Dummy</h1>
		<h2 id="gallery">Gallery</h2>
		<div class="gallery">
			<p>There are currently <?php echo count(glob("media/screencaps/*.png")) ?> images for <a href="index.php">The Case of the Talkative Dummy</a>.</p>
			<?php
				$dirname = "media/screencaps/thumbs/";
				$images = glob($dirname."*.png");

				foreach($images as $image) {
					echo '<img src="'.$image.'" class="gallery-item"> ';
				}
			?>
		</div>
		
		<?php
			include_once $_SERVER['DOCUMENT_ROOT'] . 'tv/gallerysegment.php'; 
		?>
		
		</main>
		
		<?php
			include_once $_SERVER['DOCUMENT_ROOT'] . 'footer.php';
		?>
		<script type="text/javascript" src="/js/add-alts-to-gallery.js"></script>
		
	</body>
</html>		