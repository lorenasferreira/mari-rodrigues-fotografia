<?php
require_once __DIR__ . '/../config/bootstrap.php';

$pageTitle = t('contact.meta.title');
$pageCss = ['contact.css'];

require_once __DIR__ . '/../partials/header.php';
?>

<main id="top" class="page page--contact">

    <section class="contact-hero">

        <div class="contact-photo contact-photo--left">
            <img src="<?= BASE_URL ?>/assets/images/portfolio/editorial-artistic/editorial-2.jpg" alt="Contact photo left">
        </div>

        <div class="contact-photo contact-photo--right">
            <img src="<?= BASE_URL ?>/assets/images/portfolio/editorial-artistic/editorial-3.jpg" alt="Contact photo right">
        </div>

        <div class="contact-form-wrapper">
            <h1 class="script"><?= t('contact.hero.title') ?></h1>
            <p class="lead"><?= t('contact.hero.lead') ?></p>

            <form class="contact-form" method="post" action="<?= BASE_URL ?>/handlers/contact-handler.php">

                <div class="field">
                    <label for="name"><?= t('contact.form.name') ?></label>
                    <input type="text" id="name" name="name" required>
                </div>

                <div class="field">
                    <label for="email"><?= t('contact.form.email') ?></label>
                    <input type="email" id="email" name="email" required>
                </div>

                <div class="field">
                    <label for="message"><?= t('contact.form.message') ?></label>
                    <textarea id="message" name="message" rows="5" required></textarea>
                </div>

                <button type="submit" class="btn btn--primary">
                    <?= t('contact.form.submit') ?>
                </button>

            </form>
        </div>

    </section>

    <section class="contact-gallery">
        <div class="gallery-grid">
            <?php for ($i = 1; $i <= 6; $i++): ?>
                <figure class="gallery-item">
                    <img src="<?= BASE_URL ?>/assets/images/portfolio/portraits/portrait-<?= $i ?>.jpg" alt="Gallery image <?= $i ?>">
                </figure>
            <?php endfor; ?>
        </div>
    </section>

</main>

<script type="module" src="<?= BASE_URL ?>/assets/js/main.js"></script>

<?php require_once __DIR__ . '/../partials/footer.php'; ?>