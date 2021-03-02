    <?php
    $args = array(
        'posts_per_page' => -1,
        'post_type' => 'our_services',
        'order' => 'ASC',
        'orderby' => 'date'
    );
    $services = new WP_Query($args);

    if ($services->have_posts()) {
    ?>
        <section class="services">
            <div class="container">
            <h2 class="section-title text-uppercase"><?php the_title(); ?></h2>
                <?php
                while ($services->have_posts()) {
                    $services->the_post();
                ?>
                    <article class="service-item">
                        <div class="row align-items-center no-gutters">

                            <div class="col-md-6 service-item-image">
                                <figure class="mb-0">
                                    <a href="<?php the_permalink(); ?>" class="d-block">
                                        <img src="<?php the_post_thumbnail_url(); ?>" alt="" />
                                    </a>
                                </figure>
                            </div>
                            <div class="col-md-6 service-item-content">
                                <aside>
                                    <h3 class='mb-5 animation' data-animation="slide-left">
                                        <a href="<?php the_permalink(); ?>" class="d-block"><?php the_title(); ?></a>
                                    </h3>
                                    <a href="<?php the_permalink(); ?>" class="text-uppercase btn btn-outline-dark animation" data-animation="slide-right">learn more</a>
                                </aside>
                            </div>
                        </div>
                    </article>
                <?php
                }
                ?>
            </div>
        </section>
    <?php
    }

    wp_reset_postdata();
    ?>