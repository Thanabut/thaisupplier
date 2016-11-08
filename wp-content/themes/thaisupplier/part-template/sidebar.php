<?php 
	$categories = get_categories( array(
	    'orderby' => 'name',
	    'parent'  => '2'
	) );
	
	// print_r($categories)
	if(is_archive()){
		$cat_id = get_query_var( 'cat' );
	}
?>

<h3 style="margin-top: 0;">สินค้าตามกลุ่ม</h3>

<ul class="page-sidebar list-unstyled">
	<?php foreach ($categories as $value): ?>
		<li class="<?php echo (is_archive() && $cat_id == $value->term_id)?"active":""; ?>"> <a href="<?php echo get_category_link( $value->term_id ); ?>"><div><?php echo $value->name ?></div></a></li>
	<?php endforeach ?>
</ul>