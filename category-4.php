<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 *
 * Custom page for the category #4 (evenements)
 */

get_header();
?>

	<div id="content" class="narrowcolumn" role="main">
		<h2 class="pagetitle">Programmation du CICC</h2>
		<?php
		$my_query = new WP_Query('category_name=Evenements&post_status=future&order=ASC');
		?>
	
		<?php if ($my_query->have_posts()) : ?>
 	  	<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
 		<div class="navigation">
			<div class="alignleft"><?php next_posts_link(__('&laquo; Older Entries', 'kubrick')); ?></div>
			<div class="alignright"><?php previous_posts_link(__('Newer Entries &raquo;', 'kubrick')); ?></div>
		</div>
		<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
		<div <?php post_class(); ?>>
				<h3 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf(__('Permanent Link to %s', 'kubrick'), the_title_attribute('echo=0')); ?>"><?php the_title(); ?></a></h3>
				<small><?php the_time(__('l, F jS, Y', 'kubrick')) ?></small>

				<div class="entry">
					<?php the_content() ?>
				</div>

				<p class="postmetadata"><?php the_tags(__('Tags:', 'kubrick'), ', ', '<br />'); ?> <?php printf(__('Posted in %s', 'kubrick'), get_the_category_list(', ')); ?> | <?php edit_post_link(__('Edit', 'kubrick'), '', ' | '); ?>  <?php comments_popup_link(__('No Comments &#187;', 'kubrick'), __('1 Comment &#187;', 'kubrick'), __('% Comments &#187;', 'kubrick'), '', __('Comments Closed', 'kubrick') ); ?></p>

			</div>

		<?php endwhile; ?>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link(__('&laquo; Older Entries', 'kubrick')); ?></div>
			<div class="alignright"><?php previous_posts_link(__('Newer Entries &raquo;', 'kubrick')); ?></div>
		</div>
	<?php else :?>
	Aucun évènement
	<?php endif;?>
	</div>

<?php get_footer(); ?>
