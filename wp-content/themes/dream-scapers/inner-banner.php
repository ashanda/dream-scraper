<?php 
	if (wp_get_attachment_url( get_post_thumbnail_id($post->ID) ))
	{
		$bannerUrl = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
	}else{
        $bannerUrl = get_field('default_inner_banner', 'option');
	}
?>

<div id="inner-banner" style="background-image:url(<?php echo $bannerUrl; ?>)"></div>