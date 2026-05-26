<?php
/*
Template Name: Strona usługi
*/

if (!defined('ABSPATH')) {
    exit;
}

$slug = get_post_field('post_name', get_post());
$is_neuro = $slug === 'neurologopedia-dziecieca';

$service = $is_neuro ? [
    'title' => 'Neurologopedia dziecięca',
    'lead' => 'Diagnoza i terapia karmienia, funkcji oralnych oraz rozwoju komunikacji u noworodków, niemowląt i małych dzieci.',
    'intro' => 'Na konsultację neurologopedyczną warto zgłosić się, gdy karmienie jest trudne, dziecko męczy się przy jedzeniu, pojawiają się niepokojące napięcia w obrębie twarzy lub rodzic potrzebuje oceny rozwoju funkcji oralnych.',
    'items' => [
        'konsultacja neurologopedyczna',
        'terapia neurologopedyczna',
        'terapia karmienia',
        'kinezjotaping w logopedii',
        'elektrostymulacja w logopedii',
        'wizyty domowe',
    ],
    'steps' => [
        'rozmawiamy o trudnościach i historii dziecka',
        'oceniamy funkcje oralne, karmienie i komfort dziecka',
        'ustalamy plan terapii oraz zalecenia do domu',
    ],
] : [
    'title' => 'Fizjoterapia dziecięca',
    'lead' => 'Ocena i terapia rozwoju ruchowego niemowląt oraz małych dzieci, prowadzona spokojnie i z instruktażem dla rodziców.',
    'intro' => 'Konsultacja fizjoterapeutyczna pomaga sprawdzić rozwój ruchowy dziecka, napięcie mięśniowe, asymetrię, ułożenie ciała oraz jakość kolejnych etapów rozwoju.',
    'items' => [
        'konsultacja fizjoterapeutyczna',
        'terapia neurorozwojowa',
        'terapia dla dzieci starszych',
        'wsparcie przy napięciach mięśniowych',
        'praca z asymetrią i opóźnieniami rozwoju',
        'instruktaż pielęgnacji i ćwiczeń dla rodziców',
    ],
    'steps' => [
        'oceniamy spontaniczny ruch i aktualny etap rozwoju',
        'dobieramy terapię do potrzeb dziecka',
        'pokazujemy rodzicom bezpieczne sposoby wspierania rozwoju na co dzień',
    ],
];

get_header();
?>

<section class="service-hero">
    <div class="container">
        <h1><?php echo esc_html($service['title']); ?></h1>
        <p><?php echo esc_html($service['lead']); ?></p>
        <div class="service-actions">
            <a class="button" href="<?php echo esc_url(step_by_step_booksy_url()); ?>" target="_blank" rel="noopener">Umów wizytę</a>
            <a class="button secondary" href="<?php echo esc_url(home_url('/#kontakt')); ?>">Kontakt</a>
        </div>
    </div>
</section>

<section class="service-main">
    <div class="container service-grid">
        <div class="service-copy">
            <p><?php echo esc_html($service['intro']); ?></p>
            <div class="image-frame">
                <img src="<?php echo esc_url(step_by_step_image($is_neuro ? 'specialist_one' : 'specialist_two')); ?>" alt="<?php echo esc_attr($service['title']); ?> w Step by Step">
            </div>
        </div>
        <div>
            <div class="service-panel">
                <h2>Zakres wsparcia</h2>
                <ul class="service-list">
                    <?php foreach ($service['items'] as $item) : ?>
                        <li><?php echo esc_html($item); ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="service-panel">
                <h2>Jak wygląda wizyta</h2>
                <ol class="visit-steps">
                    <?php foreach ($service['steps'] as $step) : ?>
                        <li><?php echo esc_html($step); ?></li>
                    <?php endforeach; ?>
                </ol>
            </div>
            <div class="service-panel">
                <h2>Najprostszy kolejny krok</h2>
                <p>Umów konsultację przez Booksy albo skontaktuj się telefonicznie, jeśli chcesz najpierw omówić sytuację dziecka.</p>
                <div class="service-actions">
                    <a class="button" href="<?php echo esc_url(step_by_step_booksy_url()); ?>" target="_blank" rel="noopener">Umów wizytę</a>
                    <a class="button secondary" href="tel:<?php echo $is_neuro ? '+48728952708' : '+48510599136'; ?>">Zadzwoń</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
