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
  <?php if ( get_field( 'map' ) ) : ?>
  <?php $map = get_field( 'map' ); ?>
  <div class="contact-map">
    <div class="meta">
        <h3>Find us on map</h3>
    </div>
    <div style="overflow:hidden;height:450px;width:600px;">
        <div id="gmap_canvas" style="height:450px;width:600px;"></div>
        <style>
        #gmap_canvas img {
            max-width: none!important;
            background: none!important;
        }
        </style>
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
  </div>
  <?php endif; ?>

</div>