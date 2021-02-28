<?php
get_header();
?>
<main>
    <?php
    $page_for_posts = get_option( 'page_for_posts' );
    $leadImg = get_the_post_thumbnail_url($page_for_posts, 'full');
    $leadSubtitle = get_the_title($page_for_posts);

    include __DIR__ . '/partials/lead-section.php';
    ?>
</main>
<?php
get_footer();
