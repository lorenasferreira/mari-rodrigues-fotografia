<?php
require_once __DIR__ . '/../config/bootstrap.php';

$pageTitle = t('about.meta.title');
$pageCss = ['about.css'];

require_once __DIR__ . '/../partials/header.php';
?>

<main id="top" class="page">

  <section class="hero">
    <div class="hero-bg" aria-hidden="true"></div>

    <div class="hero-inner">

      <div class="hero-card">
        <h1 class="display">
          <span class="display__brand"><?= t('about.hero.greeting') ?></span>
          <span class="display__name"><?= t('about.hero.name') ?></span>
        </h1>

        <p class="lead"><?= t('about.hero.lead') ?></p>
      </div>

      <figure class="polaroid">
        <img src="<?= BASE_URL ?>/assets/images/about/portrait.JPG" alt="Portrait" />
      </figure>

      <div class="hero-stickers" aria-hidden="true">
        <span class="star"></span>
        <span class="star star--sm"></span>
        <span class="dotgrid"></span>
      </div>

    </div>
  </section>

  <section id="about" class="section section--about">
    <span class="bg-script bg-script--about"><?= t('about.hero.script') ?></span>

    <div class="collage">
      <div class="collage__paper">

        <div class="two-col">
          <div>
            <p class="body"><?= t('about.section.paragraph1') ?></p>
            <p class="body"><?= t('about.section.paragraph2') ?></p>
            <p class="body"><?= t('about.section.paragraph3') ?></p>
            <p class="body"><?= t('about.section.paragraph4') ?></p>
          </div>

          <div class="stack">
            <figure class="torn torn--left">
              <img src="<?= BASE_URL ?>/assets/images/about/about-1.JPG" alt="" />
            </figure>

            <figure class="tape-card">
              <img src="<?= BASE_URL ?>/assets/images/about/about-2.JPG" alt="" />
              <span class="tape tape--a"></span>
              <span class="tape tape--b"></span>
            </figure>
          </div>
        </div>

      </div>

      <div class="collage__edge"></div>
    </div>
  </section>

<section id="facts" class="section section--story">
  <span class="bg-script bg-script--story"><?= t('about.facts.script') ?></span>

  <div class="story-wrap">

    <header class="story-header">
      <p class="body body--muted"><?= t('about.facts.subtitle') ?></p>
    </header>

    <div class="triptych">
      <figure class="torn">
        <img src="<?= BASE_URL ?>/assets/images/about/story-1.HEIC" alt="" />
        <figcaption class="fact">
          <strong><?= t('about.facts.one.title') ?></strong><br>
          <?= t('about.facts.one.text') ?>
        </figcaption>
      </figure>

      <figure class="torn">
        <img src="<?= BASE_URL ?>/assets/images/about/story-2.JPG" alt="" />
        <figcaption class="fact">
          <strong><?= t('about.facts.two.title') ?></strong><br>
          <?= t('about.facts.two.text') ?>
        </figcaption>
      </figure>

      <figure class="torn">
        <img src="<?= BASE_URL ?>/assets/images/about/story-3.JPG" alt="" />
        <figcaption class="fact">
          <strong><?= t('about.facts.three.title') ?></strong><br>
          <?= t('about.facts.three.text') ?>
        </figcaption>
      </figure>
    </div>

  </div>
</section>

<section id="reviews-cta" class="section section--reviews">
  <div class="reviews-wrap">
<h2 class="script"><?= t('about.reviews.script') ?></h2>
    <div class="reviews-card">
      <p class="body"><?= t('about.reviews.text') ?></p>

      <a
        class="link-cta"
        href="https://maps.app.goo.gl/H2drHAxMrZ5mmiru8"
        target="_blank"
        rel="noopener noreferrer">
        <?= t('about.reviews.cta') ?>
      </a>
    </div>

    <div class="cta-wrap cta-wrap--inline">
      <h2 class="script"><?= t('about.cta.title') ?></h2>
      <p class="cta-text"><?= t('about.cta.text') ?></p>

      <a class="link-cta" href="./contact.php">
        <?= t('about.cta.button') ?>
      </a>
    </div>

  </div>
</section>

</main>

<script type="module" src="<?= BASE_URL ?>/assets/js/main.js"></script>

<?php require_once __DIR__ . '/../partials/footer.php'; ?>