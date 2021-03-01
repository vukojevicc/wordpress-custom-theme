<?php
    if(is_home() && get_option('page_for_posts')){
        $page_for_posts = get_option( 'page_for_posts' );
        $leadImg = get_the_post_thumbnail_url($page_for_posts, 'full');
        $leadSubtitle = get_the_title($page_for_posts);    
    }else{
        $leadSubtitle = get_the_title();
        $leadImg = get_the_post_thumbnail_url(get_the_ID(), 'full');    
    }
?>
<section class="lead-section text-center" style=" background-image: linear-gradient(180deg, rgba(0,0,0,0.45) 0%, rgba(0,0,0,0.2) 100%), url(<?php echo $leadImg; ?>) ">
    <div class="container d-flex flex-wrap align-items-center justify-content-center">
        <h2 class="lead-section-title text-white animation" data-animation="slide-bottom"><?php echo $leadSubtitle; ?></h2>
    </div>
</section>