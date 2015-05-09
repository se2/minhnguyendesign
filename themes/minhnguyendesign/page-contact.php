<div class="content-panel">
    <div class="page-title holder">
        <h2><?php echo get_the_title(); ?></h2>
    </div>
</div>
<div class="page-content">
<?php
  $page = get_page_by_path( 'contact' );
  $content = apply_filters('the_content', $page->post_content);
  echo $content;
?>
  <div class="contact-map">
  <?php if ( get_field( 'map' ) ) : ?>
  <?php $map = get_field( 'map' ); ?>
    <div class="meta">
        <h3>Find us on map</h3>
    </div>
    <div style="overflow:hidden;height:450px;width:600px;">
        <div id="gmap_canvas" style="height:450px;width:600px;"></div>
    </div>
    <script type="text/javascript">
    function init_map() {
        var myOptions = {
            zoom: 16,
            center: new google.maps.LatLng('<?php echo $map["lat"]; ?>', '<?php echo $map["lng"]; ?>'),
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);
        marker = new google.maps.Marker({
            map: map,
            position: new google.maps.LatLng('<?php echo $map["lat"]; ?>', '<?php echo $map["lng"]; ?>')
        });
        infowindow = new google.maps.InfoWindow({
            content: "<b>Minh Nguyen Design</b><br/>" + '<?php echo $map["address"]; ?>' + "<br/> "
        });
        google.maps.event.addListener(marker, "click", function() {
            infowindow.open(map, marker);
        });
        infowindow.open(map, marker);
    }
    google.maps.event.addDomListener(window, 'load', init_map);
    </script>
  <?php endif; ?>
  <?php
    // gravity_form( $id_or_title, $display_title = true, $display_description = true, $display_inactive = false, $field_values = null, $ajax = false, $tabindex );
    gravity_form(
      1,
      true,
      true,
      false,
      null,
      true);
  ?>
  </div>
  <aside id="sidebar" class="same-height-right" style="height: 888px;">
      <!-- widget -->
      <div class="widget">
          <h3>Keep in touch with us</h3>
          <h5>You can find MINH NGUYEN DESIGN on our new address.</h5>
          <br>
          <dl>
              <?php if (get_field('name')) : ?>
              <dt>Name: </dt><dd><span id="name_u"><?php echo get_field('name'); ?></span><br></dd>
              <?php endif; ?>
              <?php if (get_field('address')) : ?>
              <dt>Address: </dt><dd><span id="address"><?php echo get_field('address'); ?></span><br></dd>
              <?php endif; ?>
              <?php if (get_field('phone')) : ?>
              <dt>Phone: </dt>
              <dd>
                <span id="phone_u">
              <?php
                foreach (get_field('phone') as $key => $number) {
                  echo $number['number'];
                  if (($key + 1) < sizeof(get_field('phone'))) {
                    echo ' - ';
                  }
                }
              ?>
                </span><br>
              </dd>
              <?php endif; ?>
              <?php if (get_field('fax')) : ?>
              <dt>Fax: </dt>
              <dd>
                <span id="fax_u">
              <?php
                foreach (get_field('fax') as $key => $number) {
                  echo $number['number'];
                  if (($key + 1) < sizeof(get_field('fax'))) {
                    echo ' - ';
                  }
                }
              ?>
                </span><br>
              </dd>
              <?php endif; ?>
              <?php if (get_field('email')) : ?>
              <dt>Email: </dt><dd><span id="mail"><a href="mailto:<?php echo get_field('email'); ?>"><?php echo get_field('email'); ?></a></span><br></dd>
              <?php endif; ?>
              <?php if (get_field('website')) : ?>
              <dt>Website: </dt><dd><span id="web"><a href="<?php echo get_field('website') ?>"><?php echo get_field('website'); ?></a></span></dd>
              <?php endif; ?>
          </dl>
      </div>
  </aside>
</div>