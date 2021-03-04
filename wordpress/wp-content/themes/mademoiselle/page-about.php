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
                    <div class="widget widget_search">
                                    <form method="post" action="">
                                        <div>
                                            <input type="text" value="" name="s" id="s" placeholder="Search">
					<input type="submit" id="searchsubmit" value="Search">
                                        </div>
                                    </form>
                                </div>
                                <div class="widget">
                                    <article class="news-item animation mb-4" data-animation="slide-top">
                                        <figure class="mb-0">
                                            <img  src="https://via.placeholder.com/500x300" alt=""/>
                                        </figure>
                                        <div class="news-item-content">
                                            <p class="date-published">07/13/2019</p>
                                            <h4 class="news-item-title">
                                                <a href="">
                                                    Welcome To The Online Best Model Winner Contest At Lookoftheyear
                                                </a> 
                                            </h4>
                                        </div>
                                    </article>
                                    <article class="news-item animation mb-4" data-animation="slide-top">
                                        <figure class="mb-0">
                                            <img  src="https://via.placeholder.com/500x300" alt=""/>
                                        </figure>
                                        <div class="news-item-content">
                                            <p class="date-published">07/13/2019</p>
                                            <h4 class="news-item-title">
                                                <a href="">
                                                    Welcome To The Online Best Model Winner Contest At Lookoftheyear
                                                </a> 
                                            </h4>
                                        </div>
                                    </article>
                                    <article class="news-item animation mb-4" data-animation="slide-top">
                                        <figure class="mb-0">
                                            <img  src="https://via.placeholder.com/500x300" alt=""/>
                                        </figure>
                                        <div class="news-item-content">
                                            <p class="date-published">07/13/2019</p>
                                            <h4 class="news-item-title">
                                                <a href="">
                                                    Welcome To The Online Best Model Winner Contest At Lookoftheyear
                                                </a> 
                                            </h4>
                                        </div>
                                    </article>
                                </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
</main>
<?php
get_footer();
