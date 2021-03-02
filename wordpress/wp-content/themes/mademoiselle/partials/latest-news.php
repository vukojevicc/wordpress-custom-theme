<?php
$args = array(
    'posts_per_page' => 3,
    'post_type' => 'post',
    'order' => 'DESC',
    'orderby' => 'date'
);
$news = new WP_Query($args);

if ($news->have_posts()) {
?>
    <section class="news">
        <div class="container">
            <h2 class="section-title text-uppercase"></h2>
            <div class="row">
                <?php
                while ($news->have_posts()) {
                    $news->the_post();
                    $introText = get_field('intro_text');
                ?>
                    <div class="col-12 col-md-4 mb-4">
                        <article class="news-item animation" data-animation="slide-top">
                            <figure class="mb-0">
                                <img src="<?php the_post_thumbnail_url(); ?>" alt="" />
                            </figure>
                            <div class="news-item-content">
                                <p class="date-published"><?php echo get_the_date('d/m/Y'); ?></p>
                                <h4 class="news-item-title">
                                    <a href="single-blog.html">
                                        <?php echo $introText; ?>
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

wp_reset_postdata();
?>