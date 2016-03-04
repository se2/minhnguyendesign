<?php
/**
 * Template Name: Homepage
 */
?>

<?php while (have_posts()) : the_post(); ?>
	<?php

		$slider = get_field( "slider" );

		if ( $slider && !empty( $slider )):
	?>
	<div class="home-slider-wrapper">
		<?php foreach ($slider as $key => $s) : ?>
		<div class="bg-cover img" style="background-image: url('<?php echo ( $s['url'] ); ?>');"></div>
		<?php endforeach; ?>
	</div>
	<?php

		endif;
	?>
<?php endwhile; ?>
