<footer class="content-info" role="contentinfo">
  <div class="container">
    <nav role="navigation" class="nav-box">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
      endif;
      ?>
    </nav>
  </div>
</footer>
