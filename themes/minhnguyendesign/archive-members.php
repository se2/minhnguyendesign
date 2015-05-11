<?php include_once 'templates/page-default-header.php'; ?>
<div class="members-wrapper">
<?php while (have_posts()) : the_post(); ?>
  <div class="col-md-4 member-single" style="padding-bottom: 10px">
      <div class="box-holder">
        <a href="<?php the_permalink(); ?>">
          <span class="image" style="text-align: center">
            <?php if (has_post_thumbnail()) : ?>
            <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); ?>
            <img src="<?php echo $image[0]; ?>" alt="" width="220px" height="303px">
            <?php else: ?>
            <img src="<?php bloginfo('template_url'); ?>/assets/images/member-default.png" alt="" width="100%" height="303px">
            <?php endif; ?>
            <span class="mask"></span>
          </span>
        </a>
        <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
        <p><?php echo get_field('position'); ?></p>
      </div>
  </div>
<?php endwhile; ?>
</div>