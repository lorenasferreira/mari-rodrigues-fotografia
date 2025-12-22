<?php
require_once __DIR__ . '/config/db_connect.php';
$lang = $_GET['lang'] ?? 'en';

$availableLangs = ['en', 'pt', 'es', 'ca'];
if (!in_array($lang, $availableLangs)) {
    $lang = 'en';
}

$translations = json_decode(
    file_get_contents(__DIR__ . "/lang/$lang.json"),
    true
);

function t($key)
{
    global $translations;
    return $translations[$key] ?? $key;
}
?>
<!DOCTYPE html>
<html lang="<?= $lang ?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mari Rodrigues — Cinematic Urban Photography</title>
    <link rel="stylesheet" href="./assets/css/hero.css">
</head>

<body>
    <header class="site-header">
        <nav class="nav">
            <ul class="nav-links">
                <li><a href="#home"><?= t('nav.home') ?></a></li>
                <li><a href="#about"><?= t('nav.about') ?></a></li>
                <li><a href="#services"><?= t('nav.services') ?></a></li>
                <li><a href="#portfolio"><?= t('nav.portfolio') ?></a></li>
                <li><a href="#contact"><?= t('nav.contact') ?></a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section class="hero" id="home">
            <img
                class="hero-image"
                src="./assets/images/hero-desktop/hero-01.jpg"
                alt="Hero image" />
            <div class="hero-controls">
                <button class="hero-arrow prev" aria-label="Previous slide">‹</button>
                <button class="hero-arrow next" aria-label="Next slide">›</button>
                <div class="hero-dots"></div>
            </div>

            <div class="hero-overlay"></div>
            <div class="hero-content">
                <div class="script"><?= t('hero.script') ?></div>
                <h1><?= t('hero.title') ?></h1>
                <div class="subtitle"><?= t('hero.subtitle') ?></div>
                <div class="divider">
                    <img src="./assets/images/ui/logo.png" alt="Mari Rodrigues Logo">
                </div>
                <p><?= t('hero.description') ?></p>
                <a href="#portfolio" class="btn">
                    <?= t('hero.cta') ?>
                </a>
            </div>
        </section>
    </main>
    <script type="module" src="./assets/js/main.js"></script>
    <!-- RESTO  -->
    <div class="about-text">
        <h2>About Mari</h2>
        <p>
            Barcelona-based photographer blending cinematic light with everyday
            intimacy. I document people in movement, shadow, and softness —
            turning ordinary seconds into meaningful frames.
        </p>
    </div>
    </section>
    <section class="stories" id="stories">
        <h2 class="section-title">Featured Stories</h2>

        <div class="story-grid">
            <div class="story-card">
                <img src="story1.jpg" />
                <h3>Barcelona Nights</h3>
            </div>

            <div class="story-card">
                <img src="story2.jpg" />
                <h3>Urban Lovers</h3>
            </div>

            <div class="story-card">
                <img src="story3.jpg" />
                <h3>Golden Hour Steps</h3>
            </div>
        </div>
    </section>
    <section class="categories" id="services">
        <h2 class="section-title">What I Photograph</h2>

        <div class="cat-grid">
            <div class="cat-card">
                <img src="couples.jpg" />
                <div class="cat-overlay"><span>Couples</span></div>
            </div>

            <div class="cat-card">
                <img src="portraits.jpg" />
                <div class="cat-overlay"><span>Portraits</span></div>
            </div>

            <div class="cat-card">
                <img src="urban.jpg" />
                <div class="cat-overlay"><span>Urban Stories</span></div>
            </div>

            <div class="cat-card">
                <img src="events.jpg" />
                <div class="cat-overlay"><span>Intimate Events</span></div>
            </div>
        </div>
    </section>
    <section class="quote">
        <p>Light is where emotion begins.</p>
    </section>
    <section class="gallery">
        <h2 class="section-title">Selected Frames</h2>

        <div class="gallery-grid">
            <img src="g1.jpg" />
            <img src="g2.jpg" />
            <img src="g3.jpg" />
            <img src="g4.jpg" />
            <img src="g5.jpg" />
            <img src="g6.jpg" />
        </div>
    </section>
    <section class="cta">
        <h2>Let’s create something honest together.</h2>
        <a href="#contact">Contact</a>
    </section>

    <script type="module" src="./assets/js/main.js"></script>
</body>

</html>