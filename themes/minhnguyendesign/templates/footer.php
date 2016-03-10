<footer class="content-info" role="contentinfo">
  <div class="container">
    <div class="menu-wrapper">
      <div class="menu-wrapper__inner">
        <nav role="navigation" class="nav-box">
          <?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
          endif;
          ?>
          <div class="contact-box">
            <div class="by"><span id="copyright">© Copyright 2014, Minh Nguyen Design Co .ltd Vietnam.</span></div>
          </div>
        </nav>
      </div>
    </div>
  </div>
</footer>
