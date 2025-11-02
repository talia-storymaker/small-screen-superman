<?php
function captionsAndAlts() {
  // move connection to a separate file later

  $hostname   = $_SERVER['DB_HOST'];
  $dbname     = $_SERVER['DB_NAME'];
  $username   = $_SERVER['DB_USER'];
  $password   = $_SERVER['DB_PASS'];

  /* Currently, captions and alts are always the same, and usually come from the
  filename. But sometimes there's an override for the caption/alt in the database.
  This function gets those when applicable. */

  try {
    $conn = new PDO("mysql:host=$hostname;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    return; 
    // Exit for graceful failure, i.e. fall back to filename-based captions/alts.
    // Still shows error at top - consider logging instead.
    // Also slow. Fix later.
  }

  $gallery = glob("media/screencaps/thumbs/*.*");
  $stmt = $conn->prepare("SELECT caption FROM gallery WHERE filename = :filename");

  $overrides = [];

  foreach ($gallery as $thumbPath) {
    $prefix = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/');
    $fullImagePath = str_replace("thumbs/", "", $thumbPath);
    $fullImagePath = $prefix . "/" . ltrim($fullImagePath, "/");

    $stmt->execute(['filename' => $fullImagePath]);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($result && !empty($result['caption'])) {
      $caption = $result['caption'];
      $overrides[$fullImagePath] = [
        'caption' => $caption,
      ];
    }
  }

  return $overrides;
}
?>