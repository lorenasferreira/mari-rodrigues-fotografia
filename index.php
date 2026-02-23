<?php
require_once __DIR__ . '/config/bootstrap.php';

$pageTitle = 'Mari Rodrigues — Cinematic Urban Photography';
$pageCss = ['home.css'];

require_once __DIR__ . '/partials/header.php';
?>

<main>
    <section class="hero" id="home">
        <img class="hero-image" src="<?= BASE_URL ?>/assets/images/hero-desktop/hero-01.jpg" alt="Hero image" />
        <div class="hero-controls">
            <button class="hero-arrow prev" aria-label="Previous slide">‹</button>
            <button class="hero-arrow next" aria-label="Next slide">›</button>
            </div>
            <div class="hero-dots"></div>
        

        <div class="hero-overlay"></div>
        <div class="hero-content">
            <div class="script"><?= t('hero.script') ?></div>
            <h1><?= t('hero.title') ?></h1>
            <div class="subtitle"><?= t('hero.subtitle') ?></div>
            <div class="divider">
                
<img src="<?= BASE_URL ?>/assets/images/ui/logo.png" alt="Mari Rodrigues Logo" />
            </div>
     <a href="<?= BASE_URL ?>/pages/portfolio/packages.php" class="btn">
                <?= t('hero.cta') ?>
            </a>
        </div>
    </section>
</main>
<script type="module" src="<?= BASE_URL ?>/assets/js/main.js"></script>
</body>

</html>