<div class="content-panel">
    <div class="page-title holder">
        <h2><?php echo get_the_title(); ?></h2>
        <!-- breadcrumbs2 -->
        <?php
        if ( function_exists('yoast_breadcrumb') ) {
          yoast_breadcrumb('<p id="breadcrumbs">','</p>');
        }
        ?>
    </div>
</div>
<div class="page-content">
<?php
  $page = get_page_by_path( 'about' );
  $content = apply_filters('the_content', $page->post_content);
  echo $content;
?>
</div>