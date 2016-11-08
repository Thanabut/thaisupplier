<?php
get_header(); 
if(have_posts()){
	the_post();
	$cats = get_the_category();
	echo '<pre>';
	print_r($cats);
	echo '</pre>';
}

?>
<ol class="breadcrumb">
  <li><a href="#">หน้าแรก</a></li>
  <li class="active"><a href=""> get_cat_name( $cat_id )</a></li>
  <li class="active">Data</li>
</ol>
<div class="row">
	<div class="col-xs-3">
		<img src="<?php echo the_post_thumbnail_url(); ?>" class="img-responsive" alt="">
	</div>
	<div class="col-xs-9">
		<div class="row">
			<div class="col-sm-12">
				<label>รหัส</label> : <?php echo the_title(); ?>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<label>รายละเอียดทั้งหมด</label> : 
			</div>
			<div class="col-xs-12">
				<?php echo the_content(); ?>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-4"></div>
			<div class="col-sm-8"></div>
		</div>
	</div>
</div>

<?php get_footer(); ?>