<?php

/**
 * Template Name: Homepage
 */
get_header();
?>
<main>
    <?php
    include __DIR__ . '/partials/lead-section.php';
    include __DIR__ . '/partials/latest-news.php';
    include __DIR__ . '/partials/services.php';
    include __DIR__ . '/partials/team.php';
    ?>
</main>
<?php
get_footer();
