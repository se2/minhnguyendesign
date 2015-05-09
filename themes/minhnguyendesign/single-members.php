<?php include_once 'templates/page-default-header.php'; ?>
<div class="container holder">
  <div id="content" class="same-height-left same-height-right" style="min-height: 500px;height: auto;">
      <div class="c1">
          <article class="post-box">
              <div id="sticky" class="dimg">
                  <?php the_post_thumbnail('full'); ?>
                  <p class="MsoNormal">
                    <span class="section-heading">Nationality</span>
                  </p>
                  <p class="MsoNormal">
                    <span style="font-size: small;"><?php echo get_field('nationality'); ?></span>
                  </p>
                  <br/>
                  <?php if (get_field('qualifications')) : ?>
                    <?php foreach (get_field('qualifications') as $key => $qualification) { ?>
                  <p class="MsoNormal">
                    <span class="section-heading">Qualification</span>
                  </p>
                      <?php foreach ($qualification['qualifications'][0] as $key => $value) { ?>
                  <p class="MsoNormal">
                    <span class="section-content"><?php echo $value; ?></span>
                  </p>
                      <?php } ?>
                    <?php } ?>
                  <?php endif; ?>
              </div>
              <div class="dinfo">
                  <h4><?php the_title(); ?></h4>
                  <h5><?php echo get_field('position'); ?></h5>
                  <?php if (get_field('pro_exp')) : ?>
                  <p class="MsoNormal">
                    <span class="section-heading">PROFESSIONAL EXPERIENCE</span>
                  </p>
                    <?php foreach (get_field('pro_exp') as $key => $exp) { ?>
                  <p style="margin: 0cm 0cm 0.0001pt 40px;" class="MsoNormal">
                    <span style="font-size: small;">
                      <?php if ($exp['from'] && $exp['to']) : ?>
                      <span ><?php echo $exp['from'] . ' - ' . ($exp['to'] == date('Y') ? 'Present' : $exp['to']) . ' : ' . $exp['description']; ?></span>
                      <?php else : ?>
                      <span ><?php echo $exp['description']; ?></span>
                      <?php endif; ?>
                    </span>
                  </p>
                    <?php } ?>
                  <?php endif; ?>
                  <br/>
                  <?php if (get_field('award')) : ?>
                  <p class="MsoNormal">
                    <span class="section-heading">AWARD</span>
                  </p>
                    <?php foreach (get_field('award') as $key => $award) { ?>
                  <p style="margin: 0cm 0cm 0.0001pt 40px;" class="MsoNormal">
                      <span style="font-size: small;"><?php echo $award['year'] . ' : ' . $award['description'] ; ?></span>
                  </p>
                    <?php } ?>
                  <?php endif; ?>
                  <br/>
                  <?php if (get_field('major_projects')) : ?>
                  <p class="MsoNormal"><span class="section-heading">MAJOR PROJECTS</span>
                  <br/><br/>
                    <?php foreach (get_field('major_projects') as $key => $project) { ?>
                  <a href="<?php echo get_permalink($project['project']->ID); ?>">
                      <p style="margin-left: 40px;" class="MsoNormal"><span style="font-family: Arial; font-size: small;"><?php echo $project['project']->post_title; ?><br></span></p>
                      <p style="margin: 0cm 0cm 0.0001pt 40px;" class="MsoNormal">&nbsp;</p>
                      <p></p>
                  </a>
                    <?php } ?>
                  <?php endif; ?>
                  <p style="margin: 0cm 0cm 0.0001pt 40px;" class="MsoNormal">&nbsp;</p>
                  <p style="margin: 0cm 0cm 0.0001pt 40px;" class="MsoNormal">&nbsp;</p>
              </div>
          </article>
      </div>
  </div>
</div>