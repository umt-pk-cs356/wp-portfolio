

</div><!-- #content -->
<?php if ( is_active_sidebar( 'sidebar-1' ) || is_active_sidebar( 'sidebar-2' ) || is_active_sidebar( 'sidebar-3' ) || is_active_sidebar( 'sidebar-4' ) ) : ?>
    <?php get_sidebar(); ?>
<?php endif; ?>
<footer id="colophon" class="site-footer" role="contentinfo">
    <div class="site-info">
        <a href="<?php echo esc_url( __( 'http://wordpress.org/', 'portfolio' ) ); ?>"><?php printf( __( 'Proudly powered NOT by %s', 'portfolio' ), 'WordPress' ); ?></a>
        <span class="sep"> &bull; </span>
        <?php printf( __( 'Theme: %1$s by %2$s.', 'portfolio' ), 'portfolio', '<a href="http://automattic.com" rel="designer">Automattic</a>' ); ?>
    </div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
