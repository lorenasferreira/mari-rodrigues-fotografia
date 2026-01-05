<?php
$pageTitle = $pageTitle ?? 'Mari Rodrigues — Cinematic Urban Photography';
$pageCss = $pageCss ?? [];
?>
<!DOCTYPE html>
<html lang="<?= htmlspecialchars($lang) ?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($pageTitle) ?></title>
    <link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/base.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/layout.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/components.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/style.css">

    <?php foreach ($pageCss as $css): ?>
        <link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/<?= $css ?>">
    <?php endforeach; ?>
</head>

<body>
    <header class="site-header">
        <nav class="nav">
            <div class="nav-left">
                <button class="menu-toggle" aria-label="Open menu">
                    ☰
                </button>

                <ul class="nav-links">
                    <li><a href="<?= BASE_URL ?>/index.php"><?= t('nav.home') ?></a></li>
                    <li><a href="<?= BASE_URL ?>/pages/portfolio/packages.php"><?= t('nav.portfolio') ?></a></li>
                    <li><a href="<?= BASE_URL ?>/pages/about.php"><?= t('nav.about') ?></a></li>
                    <li><a href="<?= BASE_URL ?>/pages/contact.php"><?= t('nav.contact') ?></a></li>
                </ul>

            </div>
            <div class="lang-switch">
                <div class="lang-desktop">
                    <a href="?lang=en" class="<?= $lang === 'en' ? 'active' : '' ?>">EN</a>
                    <a href="?lang=es" class="<?= $lang === 'es' ? 'active' : '' ?>">ES</a>
                    <a href="?lang=ca" class="<?= $lang === 'ca' ? 'active' : '' ?>">CA</a>
                    <a href="?lang=pt" class="<?= $lang === 'pt' ? 'active' : '' ?>">PT</a>
                </div>

                <div class="lang-mobile">
                    <button class="lang-current" aria-label="Change language">
                        <?= strtoupper($lang) ?> ▾
                    </button>

                    <ul class="lang-dropdown">
                        <?php if ($lang !== 'en'): ?><li><a href="?lang=en">EN</a></li><?php endif; ?>
                        <?php if ($lang !== 'es'): ?><li><a href="?lang=es">ES</a></li><?php endif; ?>
                        <?php if ($lang !== 'ca'): ?><li><a href="?lang=ca">CA</a></li><?php endif; ?>
                        <?php if ($lang !== 'pt'): ?><li><a href="?lang=pt">PT</a></li><?php endif; ?>
                    </ul>
                </div>

            </div>

        </nav>
    </header>