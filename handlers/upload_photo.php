<?php
declare(strict_types=1);

require_once __DIR__ . '/../config/auth.php';
require_once __DIR__ . '/../config/db.php';

require_admin();

$MAX_SIZE = 3 * 1024 * 1024;
$UPLOAD_DIR = __DIR__ . '/../assets/uploads/';
$ALLOWED_MIME = ['image/jpeg', 'image/png'];

if (
  !isset($_FILES['photo']) ||
  $_FILES['photo']['error'] !== UPLOAD_ERR_OK
) {
  die('Upload failed.');
}

if (
  empty($_POST['alt_text']) ||
  empty($_POST['section'])
) {
  die('Alt text and section are required.');
}

$altText  = trim($_POST['alt_text']);
$section  = trim($_POST['section']);
$category = trim($_POST['category'] ?? '') ?: null;

if ($_FILES['photo']['size'] > $MAX_SIZE) {
  die('File too large. Maximum size is 3MB.');
}

$finfo = finfo_open(FILEINFO_MIME_TYPE);
$mime  = finfo_file($finfo, $_FILES['photo']['tmp_name']);
finfo_close($finfo);

if (!in_array($mime, $ALLOWED_MIME, true)) {
  die('Invalid file type.');
}

$extension = $mime === 'image/png' ? 'png' : 'jpg';

$filename = uniqid('photo_', true) . '.' . $extension;
$targetPath = $UPLOAD_DIR . $filename;

if (!is_dir($UPLOAD_DIR)) {
  mkdir($UPLOAD_DIR, 0755, true);
}

if (!move_uploaded_file($_FILES['photo']['tmp_name'], $targetPath)) {
  die('Failed to save file.');
}

$sql = "
  INSERT INTO photos (file_path, alt_text, section, category)
  VALUES (:file_path, :alt_text, :section, :category)
";

$stmt = $pdo->prepare($sql);
$stmt->execute([
  ':file_path' => 'assets/uploads/' . $filename,
  ':alt_text'  => $altText,
  ':section'   => $section,
  ':category'  => $category,
]);


header('Location: /admin/dashboard.php');
exit;
