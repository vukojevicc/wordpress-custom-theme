<?php
get_header();
?>
<main>
<?php
if(have_posts()){
    while(have_posts()){
        the_post();
        ?>
        <h1><?php the_title(); ?></h1>
        <div><?php the_content(); ?></div>
        <?php
    }
}
?>
</main>
<?php
get_footer();
