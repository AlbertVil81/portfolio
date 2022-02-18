<?php get_header(); ?>
	<!-- Inicio Loop -->
	<?php while(have_posts()) : the_post(); ?>

	<div class="container-fluid">
		<div class="row">
			<div class="col s12 m12 l8 offset-l2">
				<div class="box-blog">
					<div class="center-align">
						<h1><?php the_title(); ?></h1>
						<span>Por: <?php the_author_meta( 'display_name', $post->post_author ); ?>&nbsp;&nbsp; | &nbsp;&nbsp;<?php echo get_the_date( 'F j, Y', $post->ID ); ?>&nbsp;&nbsp; </span>
						<div class="space20"></div>
						<img class="responsive-img" alt="" title="" src="<?php echo get_the_post_thumbnail_url( $post->ID, $size = 'full' ); ?> ">
					</div>
					<div class="row">
						<div class="col s12 m12 l8 offset-l2">
							<div class="space50"></div>
							<p><?php the_content(); ?></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php endwhile; ?>
	<!-- Final loop -->
<?php get_footer(); ?>