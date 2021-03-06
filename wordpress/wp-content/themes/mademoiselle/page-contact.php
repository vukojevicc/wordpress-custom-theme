<?php

/**
 * Template Name: Contact Page
 */
get_header();

$map = get_field('contact_page_map');
$form_title = get_field('contact_form_title');
$form = get_field('contact_form');
?>
<main>
    <section class="contact-us position-relative">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-4 mb-md-0">
                    <article class="contact-us-form pr-lg-4 pr-xl-0">
                        <h2 class="section-title text-uppercase">
                        <?php
                            echo $form_title;
                        ?>
                        </h2>

                        <form class="contact-form" method="post" action="">
                            <?php echo $form; ?>
                        </form>
                    </article>
                </div>
                <div class="col-lg-6 col-xl-5 contact-us-map">
                    <div class="embed-responsive embed-responsive-1by1 h-100">
                    <?php
                        echo $map;
                    ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-us-data bg-primary">
        <div class="container">
            <?php
                include __DIR__ . '/partials/contact-info.php';
            ?>
        </div>
    </section>
</main>
<?php
get_footer();
