</div><!-- #content -->
<footer>
  <div class="content-container">
    <!-- left column -->
    <div class="footer-left-col">
      <section id="footer" ></section>
      <?php dynamic_sidebar('footer'); ?>
    </div>

   <!-- right column -->
    <div class="footer-right-col">
      <nav class="footer-navigation">
        <?php
          wp_nav_menu(array(
           'theme_location' => 'menu-1',
           'menu_id'        => 'primary-menu',
          ));
        ?>
      </nav>
    </div>
  </div>
</footer>
<?php
  wp_footer();
?>
</body>
</html>