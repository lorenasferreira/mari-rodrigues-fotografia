<?php
require_once __DIR__ . '/../../config/bootstrap.php';

$pageTitle = t('packages.meta.title');
$pageCss   = ['packages.css'];

require_once __DIR__ . '/../../partials/header.php';
?>

<main class="page page--packages">

  <section class="hero">
    <div class="hero-overlay">
      <h1 class="hero-title">
        <span class="packages1"><?= t('packages.hero.title_line1') ?></span><br>
        <span class="packages2"><?= t('packages.hero.title_line2') ?></span>
      </h1>
    </div>
  </section>

  <section class="packages">
    <section class="packages-carousel">

      <button class="carousel-arrow prev" aria-label="Previous">‹</button>

      <div class="packages-track">

        <article class="package-card">
          <a href="<?= BASE_URL ?>/pages/portfolio/category.php?type=publicity" class="package-link">
            <img src="<?= BASE_URL ?>/assets/images/portfolio/publicity/publicity-01.jpg"
              alt="<?= t('packages.publicity.alt') ?>">
            <h2><?= t('packages.publicity.title') ?></h2>
          </a>
        </article>

        <article class="package-card">
          <a href="<?= BASE_URL ?>/pages/portfolio/category.php?type=events-bts" class="package-link">
            <img src="<?= BASE_URL ?>/assets/images/portfolio/events-bts/bts-02.jpg"
              alt="<?= t('packages.bts.alt') ?>">
            <h2><?= t('packages.bts.title') ?></h2>
          </a>
        </article>

        <article class="package-card">
          <a href="<?= BASE_URL ?>/pages/portfolio/category.php?type=portraits" class="package-link">
            <img src="<?= BASE_URL ?>/assets/images/portfolio/portraits/portrait-01.jpg"
              alt="<?= t('packages.portrait.alt') ?>">
            <h2><?= t('packages.portrait.title') ?></h2>
          </a>
        </article>

        <article class="package-card">
          <a href="<?= BASE_URL ?>/pages/portfolio/category.php?type=editorial-artistic" class="package-link">
            <img src="<?= BASE_URL ?>/assets/images/portfolio/editorial-artistic/editorial-01.jpg"
              alt="<?= t('packages.editorial.alt') ?>">
            <h2><?= t('packages.editorial.title') ?></h2>
          </a>
        </article>

      </div>

      <button class="carousel-arrow next" aria-label="Next">›</button>

    </section>
  </section>

</main>

<script type="module" src="<?= BASE_URL ?>/assets/js/main.js"></script>

<?php require_once __DIR__ . '/../../partials/footer.php'; ?>