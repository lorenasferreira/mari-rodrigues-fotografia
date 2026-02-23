<?php
declare(strict_types=1);

require_once __DIR__ . '/../config/auth.php';
require_admin();
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Upload Photo</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>

<main style="max-width:720px;margin:40px auto;padding:20px;">
  <h1>Upload Photo</h1>

  <form
    action="/handlers/upload_photo.php"
    method="POST"
    enctype="multipart/form-data"
  >

    <!-- FOTO -->
    <div style="margin-bottom:20px;">
      <label for="photo"><strong>Photo</strong></label><br>
      <input
        type="file"
        name="photo"
        id="photo"
        accept="image/jpeg,image/png"
        required
      >
      <p style="font-size:14px;color:#666;">
        JPG or PNG • Max 3MB
      </p>
    </div>

    <!-- ALT TEXT -->
    <div style="margin-bottom:20px;">
      <label for="alt_text"><strong>Alt text</strong></label><br>
      <input
        type="text"
        name="alt_text"
        id="alt_text"
        placeholder="Describe the image"
        required
        style="width:100%;padding:10px;"
      >
    </div>

    <!-- SECTION -->
    <div style="margin-bottom:20px;">
      <label for="section"><strong>Section</strong></label><br>
      <select
        name="section"
        id="section"
        required
        style="width:100%;padding:10px;"
      >
        <option value="">Select section</option>
        <option value="home">Home</option>
        <option value="about">About</option>
        <option value="contact">Contact</option>
        <option value="packages">Packages</option>
        <option value="portfolio">Portfolio</option>
      </select>
    </div>

    <!-- CATEGORY (opcional) -->
    <div style="margin-bottom:30px;">
      <label for="category"><strong>Category</strong> (optional)</label><br>
      <input
        type="text"
        name="category"
        id="category"
        placeholder="e.g. couples, editorial"
        style="width:100%;padding:10px;"
      >
      <p style="font-size:14px;color:#666;">
        Used only for portfolio photos
      </p>
    </div>

    <!-- BOTÃO -->
    <button
      type="submit"
      style="padding:12px 20px;font-size:16px;"
    >
      Upload Photo
    </button>

  </form>

  <p style="margin-top:20px;">
    <a href="/admin/dashboard.php">← Back to dashboard</a>
  </p>
</main>

</body>
</html>
