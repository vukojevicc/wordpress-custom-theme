<?php

/**
 * Template Name: About
 */
get_header();
?>
<main>
    <?php
    include __DIR__ . '/partials/lead-section.php';
    ?>
    <section class="page-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8 mb-4 mb-md-0">
                    <article class="page-content">
                        <!-- display page content using the_content() -->
                        <?php the_content(); ?>
                    </article>
                </div>
                <div class="col-12 col-md-4">
                    <aside class="page-sidebar">
                        <?php
                            get_sidebar();
                        ?>
                    </aside>
                </div>
            </div>
        </div>
    </section>
</main>
<?php
get_footer();
