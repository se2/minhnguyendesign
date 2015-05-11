<?php include_once 'templates/page-default-header.php'; ?>
<div class="holder">
    <!-- portfolio-box -->
    <section class="portfolio-box">
      <?php if (get_field('gallery')) : ?>
        <?php foreach (get_field('gallery') as $key => $image) { ?>
      <span class="image">
        <img style="width: 500px" src="<?php echo $image['url']; ?>" alt="image description">
        <span class="mask"></span>
        <a href="<?php echo $image['url']; ?>" class="btn-photo" rel="prettyPhoto[pp_gallery1]">photo</a>
      </span>
        <?php } ?>
      <?php endif; ?>
      <div class="text-box">
        <h4><?php the_title(); ?></h4>
        <p></p>
        <p>Location : <?php echo get_field('location'); ?></p>
        <p align="left" class="MsoNormal"><span>&nbsp;</span></p>
        <p align="left" class="MsoNormal"><span></span></p><p><?php the_content(); ?></p>

        <?php if (get_field('year')) : ?>
        <h5>Year:</h5>
        <p><?php echo get_field('year'); ?></p>
        <?php endif; ?>

        <?php if (get_field('status')) : ?>
        <h5>Status:</h5>
        <p><?php echo get_field('status'); ?></p>
        <?php endif; ?>

        <?php if (get_field('members')) : ?>
        <h5>Members:</h5>
        <p>
          <?php foreach (get_field('members') as $key => $member) { ?>
          <a href="<?php echo get_permalink($member['member']->ID); ?>" title="<?php echo $member['member']->post_title; ?>">
            <?php echo $member['member']->post_title; ?>
          </a><br/>
          <?php } ?>
        </p>
        <?php endif; ?>
      </div>
    </section>
</div>