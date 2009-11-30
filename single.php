<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header();
?>

	<div id="content" class="widecolumn" role="main">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="navigation">
			<div class="alignleft"><?php 
			previous_post_link('&laquo; %link','%title'	,true) 
			//previous_post_link('format','link','in_same_cat','excluded_categories'); 
			?>
			</div>
			<div class="alignright"><?php 
			next_post_link('%link &raquo;','%title',true) 
			//next_post_link('format','link','in_same_cat','excluded_categories');
			?></div>
			
			<?php  ?>

		</div>

		<!-- Custom code to force post template by category -->
		<?php if ( in_category('4') ) {
				include(TEMPLATEPATH . '/singleEvenement.php');
			}else {
				include(TEMPLATEPATH . '/singleOriginal.php');
		}?>

		<?php comments_template(); ?>

	<?php endwhile; else: ?>

	<p><?php _e('Sorry, no posts matched your criteria.', 'kubrick'); ?></p>

<?php endif; ?>

	</div>

<?php get_footer(); ?>
