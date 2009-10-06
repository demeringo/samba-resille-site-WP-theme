<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
/*
Template Name: Programmation
*/

get_header(); ?>

	<div id="content" class="narrowcolumn" role="main">
<h2>A venir</h2>

<?php
$my_query = new WP_Query('category_name=Evenements&post_status=future&order=ASC');
while ($my_query->have_posts()) : $my_query->the_post();
$do_not_duplicate = $post->ID;
?>

<dl class="giglist">
<dt><?php the_time('l, F jS, Y') ?>:</dt>
<dd><?php the_content(); ?></dd>
</dl>

<?php endwhile;?>

<h2>Evenements passes</h2>

<?php
$my_query = new WP_Query('category_name=Evenements');
while ($my_query->have_posts()) : $my_query->the_post();
$do_not_duplicate = $post->ID;
?>

<dl class="giglist">
<dt><?php the_time('l, F jS, Y') ?>:</dt>
<dd><?php the_content(); ?></dd>
</dl>

<?php endwhile;?>


</div>

		


<?php get_footer(); ?>
