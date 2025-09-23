<?php
function captionsAndAlts() {
  $dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/..');
  $dotenv->load();

  // move connection to a separate file later
  $hostname   = $_ENV['DB_HOST'];
  $dbname     = $_ENV['DB_NAME'];
  $username   = $_ENV['DB_USER'];
  $password   = $_ENV['DB_PASS'];

  try {
    $conn = new PDO("mysql:host=$hostname;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }

  $gallery = glob("media/screencaps/thumbs/*.*");
  /* Currently, captions and alts are always the same, and usually come from the
  filename. But sometimes there's an override for the caption/alt in the database.
  This gets those when applicable. */
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