<?php include_once 'templates/page-default-header.php'; ?>
<div class="type-box holder" id="options">

  <ul id="filters" class="option-set clearfix" data-option-key="filter">
    <li><a href="#filter" data-option-value="*">All</a></li>
    <?php $terms = get_terms('project_category', array('orderby'=>'name','order'=>'ASC','hide_empty'=>false)); ?>
    <?php foreach ($terms as $key => $term) { ?>
    <li><a href="#filter" data-option-value=".<?php echo $term->name ?>" style="text-transform:uppercase;"><?php echo $term->name; ?></a></li>
    <?php } ?>
  </ul>

  <ul id="filters" class="option-set clearfix" data-option-key="filter">
      <li><a href="#filter" data-option-value=".Finished">Finished</a></li>
      <li><a href="#filter" data-option-value=".Concept">Concept</a></li>
      <li><a href="#filter" data-option-value=".Under">Under Construction</a></li>
  </ul>

  <ul id="filters" class="option-set clearfix" data-option-key="filter">
      <li><a href="#filter" data-option-value=".2015">2015</a></li>
      <li><a href="#filter" data-option-value=".2014">2014</a></li>
      <li><a href="#filter" data-option-value=".2013">2013</a></li>
      <li><a href="#filter" data-option-value=".2012">2012</a></li>
  </ul>

</div>

<div id="projects-wrapper">
  <?php while (have_posts()) : the_post(); ?>
  <?php $projectCates = get_the_terms($post->ID,'project_category'); ?>
  <div class="col-md-4 project-element isotope-item
              <?php foreach ($projectCates as $key => $value) { echo ($value->name); } ?>
              <?php echo get_field('year'); ?>
              <?php echo (get_field('status') == 'Under Construction') ? 'Under' : get_field('status') ; ?>">
    <div class="box-holder">
      <span class="image">
        <?php if (has_post_thumbnail()) : ?>
        <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); ?>
        <!-- <img style="width: 283px; height: 189px" src="<?php // echo $image[0]; ?>" alt=""> -->
        <div style="width:283px;height:189px;background:url('<?php echo $image[0]; ?>');background-size:cover;background-position:center;"></div>
        <?php else: ?>
        <div style="width:283px;height:189px;background:url('<?php bloginfo('template_url'); ?>/assets/images/logo.png');background-size:cover;background-position:center;"></div>
        <!-- <img style="width: 283px; height: 189px" src="<?php // bloginfo('template_url'); ?>/assets/images/logo.png" alt=""> -->
        <?php endif; ?>
        <span class="mask"></span>
        <a href="<?php the_permalink(); ?>" class="btn-photo">photo</a>
      </span>
      <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
      <p><?php echo get_field('status'); ?></p>
    </div>
  </div>
  <?php endwhile; ?>
</div>