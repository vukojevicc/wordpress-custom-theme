<footer class="text-center">
    <div class="container">
        <?php
        $socialMenu = get_nav_menu_locations();
        $socialMenuId = $socialMenu['social-menu'];

        $socialMenuItems = wp_get_nav_menu_items($socialMenuId);

        if (!empty($socialMenuItems)) {
        ?>
            <nav class="social  mb-4">
                <?php
                foreach ($socialMenuItems as $socialMenuItem) {
                ?>
                    <a class="<?php foreach ($socialMenuItem->classes as $class) {
                                    echo $class . ' ';
                                } ?>" href="<?php echo $socialMenuItem->url ?>" target="_blank"></a>
                <?php
                }
                ?>
            </nav>
        <?php
        }
        ?>
        <p class="copyright">
            Copyright &copy; <?php echo date('Y') ?> <a href="<?php echo home_url() ?>"><?php bloginfo('name'); ?></a>
        </p>
    </div>
</footer>


<?php
// Ucitavanje neophodnih js fajlova za funkcionisanje wp-a
wp_footer();
?>
</body>

</html>