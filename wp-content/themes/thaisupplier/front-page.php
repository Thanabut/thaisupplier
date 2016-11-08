<?php
/**
 * Template Name: front-page
 *
 */
	get_header(); 

	$categories = get_categories( array(
	    'orderby' => 'name',
	    'parent'  => '2'
	) );
?>

<?php 
	foreach ($categories as $cat): 
		if($cat->count > 0):
			$posts = get_posts('posts_per_page=6&category='.$cat->term_id);
?>

	
		<a href="<?php echo get_category_link( $cat->term_id ); ?>">
			<h2 ><?php echo $cat->name ?></h2>
		</a>
		<div class="row row-eq-height">
			<?php foreach ($posts as $post): 
				$image = wp_get_attachment_image_src( get_post_thumbnail_id( $value->ID ), 'single-post-thumbnail' );
			?>
				<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 ">
					<div class="thumbnail">
						<a href="<?php echo get_post_permalink($post->ID); ?>">
				      		<img src="<?php echo $image[0]; ?>" >
				      		<div class="text-center">
								<h3><?= $post->post_title ?></h3>
				      		</div>
				      		<div class="caption text-center">
						        
						        <p class="">...</p>
						        <!-- <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p> -->
				      		</div>
			      		</a>
			   	 	</div>
				</div>
			<?php endforeach ?>

		</div>
		<div class="row">
			<a class="pull-right" href="<?php echo get_category_link( $cat->term_id ); ?>">
				<h3 class="">ดูทั้งหมด</h3>
			</a>
		</div>

<?php 
	endif;
endforeach;
?>





<?php get_footer(); ?>