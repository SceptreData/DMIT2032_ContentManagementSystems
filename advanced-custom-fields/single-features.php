<?php 
$header = get_field('header'); 
$title = $header['title'];
$imgSrc = $header['header_img'];
$tagline = $header['tagline'];
?>
<h1><?php echo $title; ?> </h1>
<p><?php echo $tagline; ?> </p>
<img src="<?php echo $imgSrc;?>">
