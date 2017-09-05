<?php
if(FILTER_TYPE == '') {
	// do nothing
} else {
	$filter_type_array = explode(',',FILTER_TYPE);
	$filter_type_count = count($filter_type_array);
}
?>
<div class="prDateCol col-sm-2">
	<div class="visible-xs afs-Divider"></div>
		<div class="afs-PRDate"><?php the_post_thumbnail( 'single-post-thumbnail' ); ?></div>
</div>
<div class="col-sm-10">
		<h4><a href="<?php echo get_the_permalink(); ?>" class="afs-GaLabel afs-EventTracking afs-GaHasFile" data-GaFID="<?php echo get_the_ID(); ?>"><?php echo get_the_title(); ?></a></h4>
 		<div class="content">
			<p><?php echo get_the_selected_excerpt(200); ?>...</p>
</div>
</div>
