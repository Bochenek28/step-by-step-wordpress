<?php

if (!defined('ABSPATH')) {
    exit;
}

function step_by_step_setup(): void
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', ['search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script']);

    register_nav_menus([
        'primary' => __('Primary Menu', 'step-by-step'),
    ]);
}
add_action('after_setup_theme', 'step_by_step_setup');

function step_by_step_assets(): void
{
    wp_enqueue_style(
        'step-by-step-fonts',
        'https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,500;9..144,650;9..144,700&family=Inter:wght@400;550;650;750&display=swap',
        [],
        null
    );

    wp_enqueue_style('step-by-step-style', get_stylesheet_uri(), ['step-by-step-fonts'], '1.0.0');
    wp_enqueue_script('step-by-step-menu', get_template_directory_uri() . '/assets/js/menu.js', [], '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'step_by_step_assets');

function step_by_step_booksy_url(): string
{
    return 'https://booksy.com/pl-pl/343535_step-by-step-centrum-wczesnego-rozwoju_fizjoterapia_4210_stare-babice?do=invite#ba_s=dl_1';
}

function step_by_step_image(string $key): string
{
    $images = [
        'logo_header' => get_template_directory_uri() . '/assets/images/step-by-step-logo-header.png',
        'logo_full' => get_template_directory_uri() . '/assets/images/step-by-step-logo-full.png',
        'hero' => 'https://static.wixstatic.com/media/0be5f1_ee01e3ea07bd448daa749d07e4defcb7~mv2.jpg/v1/fill/w_800,h_1200,al_c,q_85,enc_auto/0be5f1_ee01e3ea07bd448daa749d07e4defcb7~mv2.jpg',
        'specialist_one' => 'https://static.wixstatic.com/media/0be5f1_6a5764274e8d48dca537b3e5971c86d4~mv2.jpg/v1/crop/x_0,y_54,w_1023,h_1023/fill/w_1023,h_1023,al_c,q_85,enc_auto/0be5f1_6a5764274e8d48dca537b3e5971c86d4~mv2.jpg',
        'specialist_two' => 'https://static.wixstatic.com/media/0be5f1_794ba5c3f5144368b397c5ac8c9b9865~mv2.jpg/v1/fill/w_1024,h_1024,al_c,q_85,enc_auto/0be5f1_794ba5c3f5144368b397c5ac8c9b9865~mv2.jpg',
    ];

    return $images[$key] ?? '';
}

function step_by_step_meta_description(): void
{
    if (is_front_page()) {
        echo '<meta name="description" content="Neurologopedia i fizjoterapia dziecięca w Step by Step, Warszawska 179, Babice Nowe. Umów wizytę.">' . "\n";
        return;
    }

    if (is_page('neurologopedia-dziecieca')) {
        echo '<meta name="description" content="Neurologopedia dziecięca w Step by Step w Babicach Nowych. Konsultacje, terapia karmienia i wsparcie najmłodszych dzieci.">' . "\n";
        return;
    }

    if (is_page('fizjoterapia-dziecieca')) {
        echo '<meta name="description" content="Fizjoterapia dziecięca w Step by Step w Babicach Nowych. Konsultacje, terapia neurorozwojowa i wsparcie rozwoju ruchowego.">' . "\n";
    }
}
add_action('wp_head', 'step_by_step_meta_description', 1);
