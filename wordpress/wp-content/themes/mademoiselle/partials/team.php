<?php
$args = array(
    'posts_per_page' => -1,
    'post_type' => 'our_team',
    'order' => 'DESC',
    'orderby' => 'date'
);
$team_members = new WP_Query($args);

if ($team_members->have_posts()) {
?>
    <section class="our-team">
        <div class="container">
            <h2 class="section-title text-uppercase">
                Trust our professionals
            </h2>
            <!-- nisam mogao da otkrijem zbog cega ne radi owl carousel plugin pa sam ucitao clanove tima na ovakav nacin -->
            <div class="team-members-slider block-owl-carousel">
                <?php
                while ($team_members->have_posts()) {
                    $team_members->the_post();
                ?>
                    <article class="team-member">
                        <div class="row align-items-lg-center">
                            <div class="col-12 col-md-5 col-lg-4 offset-lg-1 mb-4 mb-md-0 ">
                                <figure class="mb-0">
                                    <img src="<?php the_post_thumbnail_url(); ?>" alt="" />
                                </figure>
                            </div>
                            <div class="col-12  col-md-6 offset-md-1 col-lg-5 col-xl-4">
                                <aside>
                                    <h2 class="team-member-title text-uppercase"><?php the_title(); ?></h2>
                                    <div class="team-member-bio">
                                            <?php the_content(); ?>
                                    </div>
                                </aside>
                            </div>
                        </div>
                    </article>
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