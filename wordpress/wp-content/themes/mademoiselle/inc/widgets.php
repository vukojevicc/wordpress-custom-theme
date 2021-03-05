<?php

/**
 * Adds latest_news widget.
 */
class latest_news extends WP_Widget
{

    /**
     * Register widget with WordPress.
     */
    public function __construct()
    {
        parent::__construct(
            'latest_news', // Base ID
            'Latest News', // Name
            array('description' => __('Display 3 Latest News', 'text_domain'),) // Args
        );
    }

    /**
     * Front-end display of widget.
     *
     * @see WP_Widget::widget()
     *
     * @param array $args     Widget arguments.
     * @param array $instance Saved values from database.
     */
    public function widget($args, $instance)
    {
        extract($args);
        $title = apply_filters('widget_title', $instance['title']);

        echo $before_widget;
        if (!empty($title)) {
            echo $before_title . $title . $after_title;
        }

        $args_news = array(
            'posts_per_page' => 3,
            'post_type' => 'post',
            'order' => 'DESC',
            'orderby' => 'date'
        );
        $news = new WP_Query($args_news);

        if ($news->have_posts()) {
            while ($news->have_posts()) {
                $news->the_post();
?>
                <article class="news-item animation" data-animation="slide-top">
                    <figure class="mb-0">
                        <img src="<?php the_post_thumbnail_url(); ?>" alt="" />
                    </figure>
                    <div class="news-item-content">
                        <p class="date-published"><?php echo get_the_date('d/m/Y'); ?></p>
                        <h4 class="news-item-title">
                            <a href="<?php the_permalink(); ?>">
                            <?php echo substr(get_the_content(), 0, 50); ?>
                            </a>
                        </h4>
                    </div>
                </article>
        <?php
            }
        }

        wp_reset_postdata();

        echo $after_widget;
    }

    /**
     * Back-end widget form.
     *
     * @see WP_Widget::form()
     *
     * @param array $instance Previously saved values from database.
     */
    public function form($instance)
    {
        if (isset($instance['title'])) {
            $title = $instance['title'];
        } else {
            $title = __('New title', 'text_domain');
        }
        ?>
        <p>
            <label for="<?php echo $this->get_field_name('title'); ?>"><?php _e('Title:'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
        </p>
<?php
    }

    /**
     * Sanitize widget form values as they are saved.
     *
     * @see WP_Widget::update()
     *
     * @param array $new_instance Values just sent to be saved.
     * @param array $old_instance Previously saved values from database.
     *
     * @return array Updated safe values to be saved.
     */
    public function update($new_instance, $old_instance)
    {
        $instance = array();
        $instance['title'] = (!empty($new_instance['title'])) ? strip_tags($new_instance['title']) : '';

        return $instance;
    }
} // class latest_news

?>
<?php
// register lates_news widget

function register_latest_news()
{
    register_widget('latest_news');
}
add_action('widgets_init', 'register_latest_news');
?>
<?php

/**
 * Adds search widget.
 */
class search extends WP_Widget
{

    /**
     * Register widget with WordPress.
     */
    public function __construct()
    {
        parent::__construct(
            'search', // Base ID
            'Search Bar', // Name
            array('description' => __('Display Search Bar', 'text_domain'),) // Args
        );
    }

    /**
     * Front-end display of widget.
     *
     * @see WP_Widget::widget()
     *
     * @param array $args     Widget arguments.
     * @param array $instance Saved values from database.
     */
    public function widget($args, $instance)
    {
        extract($args);
        $title = apply_filters('widget_title', $instance['title']);

        echo $before_widget;
        if (!empty($title)) {
            echo $before_title . $title . $after_title;
        }

?>
        <form role="search" method="get" id="searchform" action="<?php bloginfo('url') ?>">
            <div>
                <input type="text" value="" name="s" id="s" placeholder="Search">
                <input type="submit" id="searchsubmit" value="Search">
            </div>
        </form>
    <?php

        echo $after_widget;
    }

    /**
     * Back-end widget form.
     *
     * @see WP_Widget::form()
     *
     * @param array $instance Previously saved values from database.
     */
    public function form($instance)
    {
        if (isset($instance['title'])) {
            $title = $instance['title'];
        } else {
            $title = __('New title', 'text_domain');
        }
    ?>
        <p>
            <label for="<?php echo $this->get_field_name('title'); ?>"><?php _e('Title:'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
        </p>
<?php
    }

    /**
     * Sanitize widget form values as they are saved.
     *
     * @see WP_Widget::update()
     *
     * @param array $new_instance Values just sent to be saved.
     * @param array $old_instance Previously saved values from database.
     *
     * @return array Updated safe values to be saved.
     */
    public function update($new_instance, $old_instance)
    {
        $instance = array();
        $instance['title'] = (!empty($new_instance['title'])) ? strip_tags($new_instance['title']) : '';

        return $instance;
    }
} // class search

?>
<?php
// register search widget

function register_search()
{
    register_widget('search');
}
add_action('widgets_init', 'register_search');
?>