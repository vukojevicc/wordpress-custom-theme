<?php
get_header();
?>
<main>
    <?php
    $leadSubtitle = get_field('lead_subtitle');
    $leadImg = get_the_post_thumbnail_url(get_the_ID(), 'full');

    include __DIR__ . '/partials/lead-section.php';
    ?>
</main>
<?php
get_footer();
