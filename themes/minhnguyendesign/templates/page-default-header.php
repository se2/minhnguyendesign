<div class="content-panel">
    <div class="page-title holder">
        <h2>
          <?php
            if (is_page() || is_single()) {
              echo get_the_title();
            } elseif (is_post_type_archive('members')) {
              echo "TEAM MEMBERS";
            }
          ?>
        </h2>
        <!-- breadcrumbs2 -->
        <?php
        if ( function_exists('yoast_breadcrumb') ) {
          yoast_breadcrumb('<p id="breadcrumbs">','</p>');
        }
        ?>
    </div>
</div>
