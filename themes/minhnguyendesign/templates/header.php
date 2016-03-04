<header class="banner" role="banner">
  <div class="container">
    <div class="section">
      <h1 class="logo" id="name">
        <a class="brand" href="<?= esc_url(home_url('/')); ?>">MINH NGUYEN DESIGN</a>
      </h1>
      <div class="contact-box">
          <!-- social -->
          <ul class="social">
              <li><a href="https://twitter.com/" class="twitter" id="twitter">twitter</a></li>
              <li><a href="https://facebook.com/" class="facebook" id="facebook">facebook</a></li>
              <li><a href="https://rss.com/" class="rss">rss</a></li>
          </ul>
      </div>
    </div>
    <div class="menu-wrapper">
      <div class="menu-wrapper__inner">
        <nav role="navigation" class="nav-box">
          <?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
          endif;
          ?>
          <div class="contact-box">
            <strong class="phone">
              <span id="phone">
                <a href="tel:08387508721">08387508721</a> - <a href="tel:0979869226">0979869226</a>
              </span>
            </strong>
          </div>
        </nav>
      </div>
    </div>
  </div>
</header>
