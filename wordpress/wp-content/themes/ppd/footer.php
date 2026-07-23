<footer class="footer">
    <div class="copyright">
        © <?php echo esc_html(date('Y')); ?> dzwiekwfilmie.pl &nbsp; | &nbsp; Wszystkie prawa zastrzeżone
        <?php
        $footer_menu_items = wp_get_nav_menu_items('footer');
        if (has_nav_menu('footer')) {
            $locations = get_nav_menu_locations();
            $menu = wp_get_nav_menu_object($locations['footer']);
            $menu_items = wp_get_nav_menu_items($menu->term_id);

            foreach ((array) $menu_items as $key => $menu_item) {
                echo ' &nbsp; | &nbsp; ';
                echo '<a href="' . esc_url($menu_item->url) . '">' . esc_html($menu_item->title) . '</a>';
            }
        }
        ?>
    </div>
</footer>
<?php get_template_part('parts/modal-contact'); ?>
<?php wp_footer(); ?>
</body>
</html>
