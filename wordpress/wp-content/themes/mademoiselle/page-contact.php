<?php

/**
 * Template Name: Contact Page
 */
get_header();

$map = get_field('contact_page_map');
?>
<main>
    <section class="contact-us position-relative">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-4 mb-md-0">
                    <article class="contact-us-form pr-lg-4 pr-xl-0">
                        <h2 class="section-title text-uppercase">
                            Please contact us using the form bellow
                        </h2>

                        <form class="contact-form" method="post" action="">
                            <div class="form-group">
                                <input class="form-control" type="text" name="your-name" value="" placeholder="Name and surname*">
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="email" name="your-email" value="" placeholder="Email address*">
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" name="your-subject" value="" placeholder="Subject*">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" rows="5" name="your-message" placeholder="Enter your message*"></textarea>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-outline-dark px-5 py-3 text-uppercase" type="submit" name="contact" value="send">send message</button>
                            </div>
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
