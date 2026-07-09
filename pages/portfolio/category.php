<?php
require_once __DIR__ . '/../../config/bootstrap.php';

$type = $_GET['type'] ?? 'publicity';

$allowedTypes = ['publicity', 'events-bts', 'editorial-artistic', 'portraits'];

if (!in_array($type, $allowedTypes, true)) {
  $type = 'publicity';
}

$currentIndex = array_search($type, $allowedTypes, true);
$prevIndex = ($currentIndex - 1 + count($allowedTypes)) % count($allowedTypes);
$nextIndex = ($currentIndex + 1) % count($allowedTypes);

$prevType = $allowedTypes[$prevIndex];
$nextType = $allowedTypes[$nextIndex];

$pageTitle = t("portfolio.$type.title") . ' — Mari Rodrigues';
$pageCss   = ['category.css'];

require_once __DIR__ . '/../../partials/header.php';
?>
<?php echo "<!-- DEPLOY_CHECK: hero-filter-v3 -->"; ?>

<?php
$heroSrc = BASE_URL . "/assets/images/portfolio/$type/hero.jpg";

if (file_exists(__DIR__ . "/../../assets/images/portfolio/$type/hero.webp")) {
  $heroSrc = BASE_URL . "/assets/images/portfolio/$type/hero.webp";
} elseif (file_exists(__DIR__ . "/../../assets/images/portfolio/$type/hero.jpeg")) {
  $heroSrc = BASE_URL . "/assets/images/portfolio/$type/hero.jpeg";
}
?>

<main class="portfolio-category">

  <section class="category-hero">

    <div class="hero-image">
      <img
        src="<?= $heroSrc ?>"
        alt="<?= t("portfolio.$type.title"); ?>">
    </div>

    <div class="hero-text">
      <h1><?= t("portfolio.$type.title"); ?></h1>

      <p class="hero-description">
        <?= t("portfolio.$type.text"); ?>
      </p>

      <span class="hero-subtitle">
        <?= t("portfolio.$type.subtitle"); ?>
      </span>
    </div>

  </section>

  <section class="category-gallery">
    <?php
    $imagesPath = __DIR__ . "/../../assets/images/portfolio/$type/";

    $images = array_merge(
      glob($imagesPath . "*.jpg"),
      glob($imagesPath . "*.JPG"),
      glob($imagesPath . "*.jpeg"),
      glob($imagesPath . "*.JPEG"),
      glob($imagesPath . "*.webp"),
      glob($imagesPath . "*.WEBP")
    );

    $images = array_filter($images, function ($img) {
      $name = strtolower(basename($img));
      return !in_array($name, ['hero.jpg', 'hero.jpeg', 'hero.webp'], true);
    });

    $images = array_values($images);

    foreach ($images as $img):
      $filename = basename($img);
      $src = BASE_URL . "/assets/images/portfolio/$type/" . $filename;
    ?>
      <figure class="gallery-item">
        <img src="<?= $src ?>" alt="">
      </figure>
    <?php endforeach; ?>
  </section>

  <nav class="category-navigation">

    <a href="?type=<?= $prevType ?>" class="nav-arrow nav-prev">
      ← <?= t("portfolio.$prevType.title"); ?>
    </a>

    <a href="?type=<?= $nextType ?>" class="nav-arrow nav-next">
      <?= t("portfolio.$nextType.title"); ?> →
    </a>

  </nav>

</main>

<script type="module" src="<?= BASE_URL ?>/assets/js/main.js"></script>

<?php require_once __DIR__ . '/../../partials/footer.php'; ?>