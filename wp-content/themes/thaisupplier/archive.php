<?php
	get_header(); 
	$cat_id = get_query_var( 'cat' );
	// echo the_category_ID();
	if(have_posts()){
		// the_post();
		$posts = get_posts('category='.$cat_id);
	}

?>
<!-- <?php $catID = the_category_ID(); ?> -->
<ol class="breadcrumb">
  <li><a href="<?php echo home_url(); ?>">หน้าแรก</a></li>
  <li class="active"><?php echo get_cat_name( $cat_id ) ?></li>
</ol>
<div class="product-list">
	<div class="row row-eq-height">
		<?php foreach ($posts as $value): 
			$image = wp_get_attachment_image_src( get_post_thumbnail_id( $value->ID ), 'single-post-thumbnail' );
		?>
			<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
				<div class="thumbnail">
					<a href="<?php echo get_post_permalink($value->ID); ?>">
			      		<img src="<?php echo $image[0]; ?>" >
			      		<div class="text-center">
							<h3><?= $value->post_title ?></h3>
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
</div>

<?php get_footer(); ?>