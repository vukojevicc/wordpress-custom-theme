<?php
get_header();
?>
<main>
    <?php
    if (have_posts()) {
        while (have_posts()) {
            the_post();
    ?>
            <section class="single-blog">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-5 mr-auto">
                            <article class="single-blog-header">
                                <div class="single-blog-detail d-flex flex-wrap align-items-end mb-4">
                                    <p class="single-blog-categories">
                                        <?php foreach (get_the_category() as $category) {
                                            echo '<a href="' . get_category_link($category) . '" class="font-weight-bold d-inline-block">' . $category->name . " " . '</a>';
                                        }; ?>
                                    </p>
                                    |
                                    <p class="date-published"><?php echo get_the_date('d/m/Y'); ?></p>
                                </div>
                                <h2 class="text-uppercase">
                                    <?php the_title(); ?>
                                </h2>
                                <p class="lead single-blog-excerpt">
                                    <?php the_excerpt(); ?>
                                </p>
                            </article>
                        </div>
                        <div class="col-12 mb-4 mb-md-0 col-md-6">
                            <figure class="mb-0 single-blog-featured-image">
                                <img src="<?php the_post_thumbnail_url(); ?>" alt="" />
                            </figure>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-12 col-lg-10 col-xl-8 ">
                                <article class="single-blog-content">
                                    <?php the_content(); ?>
                                </article>

                                <div class="single-blog-tags-wrapper">
                                    <p class="single-blog-tags-label">Tags:</p>
                                    <div class="single-blog-tags">
                                    <?php foreach (get_the_tags() as $tag) {
                                            echo '<a href="' . get_tag_link($tag) . '" class="btn btn-light px-4 text-lowercase">' . $tag->name . " " . '</a> ';
                                        }; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
    <?php
        }
    }
    ?>
</main>
<?php
get_footer();
