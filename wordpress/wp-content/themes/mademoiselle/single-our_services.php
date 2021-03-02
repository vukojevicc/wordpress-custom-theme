<?php
get_header();
?>
<main>
    <section class="single-service">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-4 mb-md-0 col-md-6">
                    <figure class="mb-0">
                        <img src="<?php the_post_thumbnail_url(); ?>" alt="" />
                    </figure>
                </div>
                <div class="col-12 col-md-5 ml-auto">
                    <article class="single-service-content">
                        <h2><?php the_title(); ?></h2>
                        <p>
                            <?php the_content(); ?>
                        </p>
                    </article>
                </div>
            </div>
        </div>
    </section>
    <?php
        include __DIR__ . '/partials/latest-news.php';
    ?>
</main>
<?php
get_footer();
