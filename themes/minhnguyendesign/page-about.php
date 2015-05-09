<?php include_once 'templates/page-default-header.php'; ?>
<div class="page-content">
<?php
  $page = get_page_by_path( 'about' );
  $content = apply_filters('the_content', $page->post_content);
  echo $content;
?>
</div>