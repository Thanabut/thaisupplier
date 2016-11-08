<?php 
	$header_text = "Header";
	if(have_posts()){
		if(is_singular('post')){
			$header_text = get_the_title();
		}else if(is_archive()){
			$cat_id = get_query_var( 'cat' );
			$header_text = get_cat_name( $cat_id );
		}else{
			$header_text = "Home page";
		}
	}
?>
<div class="page-header">
	<h1><?php echo $header_text; ?></h1>
</div>