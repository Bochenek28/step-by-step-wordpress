<?php
if (!defined('ABSPATH')) {
    exit;
}
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="site-header">
    <div class="container header-inner">
        <a class="brand" href="<?php echo esc_url(home_url('/')); ?>" aria-label="Step by Step - strona główna">
            <span class="brand-logo" aria-hidden="true">
                <img src="<?php echo esc_url(step_by_step_image('logo_header')); ?>" alt="">
            </span>
        </a>
        <button class="nav-toggle" type="button" aria-expanded="false" aria-controls="primary-navigation" aria-label="Otwórz menu">
            <svg width="24" height="24" viewBox="0 0 24 24" aria-hidden="true">
                <path d="M4 7h16M4 12h16M4 17h16" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
            </svg>
        </button>
        <nav class="site-nav" id="primary-navigation" aria-label="Główna nawigacja">
            <a href="<?php echo esc_url(home_url('/#o-nas')); ?>">O nas</a>
            <a href="<?php echo esc_url(home_url('/#specjalisci')); ?>">Specjaliści</a>
            <a href="<?php echo esc_url(home_url('/#oferta')); ?>">Oferta</a>
            <a href="<?php echo esc_url(home_url('/#dokumenty')); ?>">Dokumenty</a>
            <a href="<?php echo esc_url(home_url('/#kontakt')); ?>">Kontakt</a>
            <a class="button" href="<?php echo esc_url(step_by_step_booksy_url()); ?>" target="_blank" rel="noopener">Umów wizytę</a>
        </nav>
    </div>
</header>
<main id="main">
