<?php
get_header();
?>
<main>
    <?php
    include __DIR__ . '/partials/lead-section.php';
    if (have_posts()) {
    ?>
        <section class="news">
            <div class="container">
                <div class="row">
                    <?php
                    while (have_posts()) {
                        the_post();
                    ?>
                        <div class="col-12 col-md-4 mb-4">
                            <article class="news-item animation" data-animation="slide-top">
                                <figure class="mb-0">
                                    <img src="<?php the_post_thumbnail_url(); ?>" alt="" />
                                </figure>
                                <div class="news-item-content">
                                    <p class="date-published"><?php echo get_the_date('d/m/Y'); ?></p>
                                    <h4 class="news-item-title">
                                        <a href="<?php the_permalink(); ?>">
                                        <?php echo substr(get_the_content(), 0, 50); ?>
                                        </a>
                                    </h4>
                                </div>
                            </article>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </section>
    <?php
    }
    ?>
    <section class="page-pagination">
        <nav>
            <ul class="pagination justify-content-center">
            <?php the_posts_pagination(array(
                'screen_reader_text' => ' ',
                'prev_text' => '&Lt;',
                'next_text' => '&Gt;'
            )); ?>
            </ul>
        </nav>
    </section>
</main>
<?php
get_footer();
