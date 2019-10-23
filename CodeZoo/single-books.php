<?php 
    get_header();
    $header = get_field('article_header')
 ?>


<header>
    <h1><?php echo $header['heading'] ?></h1>
    <p><?php echo $header['tagline'] ?></p>
    <img src="<?php echo $header['header_image']; ?>">
</header>

<?php get_footer(); ?>