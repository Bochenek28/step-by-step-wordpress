<?php
if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>

<section class="service-hero">
    <div class="container">
        <h1><?php single_post_title(); ?></h1>
    </div>
</section>

<section class="service-main">
    <div class="container">
        <?php
        if (have_posts()) :
            while (have_posts()) :
                the_post();
                the_content();
            endwhile;
        endif;
        ?>
    </div>
</section>

<?php
get_footer();
