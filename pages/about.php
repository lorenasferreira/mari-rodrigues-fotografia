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

        <p class="lead">
          <?= t('about.hero.lead') ?>
        </p>
      </div>

      <figure class="polaroid polaroid--hero">
        <img src="<?= BASE_URL ?>/assets/images/about/portrait.JPG" alt="Portrait preview" />
        <figcaption><?= t('about.hero.location') ?></figcaption>
      </figure>

      <span class="bg-script bg-script--about"><?= t('about.hero.script') ?></span>

      <div class="hero-stickers" aria-hidden="true">
        <span class="star"></span>
        <span class="star star--sm"></span>
        <span class="dotgrid"></span>
      </div>
    </div>
  </section>

  <section id="about" class="section section--about">

    <div class="collage">
      <div class="collage__paper">
        <h2 class="script"><?= t('about.section.title') ?></h2>

        <div class="two-col">
          <div>
            <h3 class="section-title"><?= t('about.section.subtitle') ?></h3>

            <p class="body"><?= t('about.section.paragraph1') ?></p>
            <p class="body"><?= t('about.section.paragraph2') ?></p>

            <a class="link-cta" href="#contact">
              <?= t('about.section.cta') ?>
            </a>
          </div>

          <div class="stack">
            <figure class="torn torn--left">
              <img src="<?= BASE_URL ?>/assets/images/about/about-1.JPG" alt="About photo 1" />
            </figure>

            <figure class="tape-card">
              <img src="<?= BASE_URL ?>/assets/images/about/about-2.JPG" alt="About photo 2" />
              <span class="tape tape--a" aria-hidden="true"></span>
              <span class="tape tape--b" aria-hidden="true"></span>
            </figure>
          </div>
        </div>
      </div>

      <div class="collage__edge" aria-hidden="true"></div>
    </div>
  </section>

  <section id="portfolio" class="section section--story">
    <span class="bg-script bg-script--story">
      <?= t('about.story.script') ?>
    </span>

    <div class="story-wrap">
      <div class="story-header">
        <h2 class="script script--light"><?= t('about.story.title') ?></h2>
        <p class="body body--muted"><?= t('about.story.subtitle') ?></p>

        <a class="link-cta link-cta--light" href="#contact">
          <?= t('about.story.cta') ?>
        </a>
      </div>

      <div class="triptych">
        <figure class="torn torn--center">
          <img src="<?= BASE_URL ?>/assets/images/about/story-1.JPG" alt="" />
        </figure>
        <figure class="torn torn--center">
          <img src="<?= BASE_URL ?>/assets/images/about/story-2.JPG" alt="" />
        </figure>
        <figure class="torn torn--center">
          <img src="<?= BASE_URL ?>/assets/images/about/story-3.JPG" alt="" />
        </figure>
      </div>
    </div>
  </section>

</main>

<script type="module" src="<?= BASE_URL ?>/assets/js/main.js"></script>

<?php require_once __DIR__ . '/../partials/footer.php'; ?>