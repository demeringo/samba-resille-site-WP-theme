<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<!--
<style type="text/css" media="screen">

<?php
// Checks to see whether it needs a sidebar or not
if ( empty($withcomments) && !is_single() ) {
?>
	#page { background: url("<?php bloginfo('stylesheet_directory'); ?>/images/kubrickbg-<?php bloginfo('text_direction'); ?>.jpg") repeat-y top; border: none; }
<?php } else { // No sidebar ?>
	#page { background: url("<?php bloginfo('stylesheet_directory'); ?>/images/kubrickbgwide.jpg") repeat-y top; border: none; }
<?php } ?>

</style>
-->
<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?> 

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="page">

 <div id="menupages">
 <table>
 <tr>
<td><a href="<?php bloginfo('url'); ?>" >Accueil</a><br/>news</td>
	<td><a href="<?php bloginfo('url'); ?>/category/evenements/" >Programmation</a><br/>Concerts, expos, stages</td>
  <td><a href="<?php bloginfo('url'); ?>/spectacles" >Spectacles</a><br/>La troupe, la pieuvre</td>
  <td><a href="<?php bloginfo('url'); ?>/apprendre" >Jouer</a><br/>Cours, médiation</td>
  <td><a href="<?php bloginfo('url'); ?>/association/" >L'association</a></td>
  <td><a href="<?php bloginfo('url'); ?>/reseau" >Réseau</td>
  <td><a href="<?php bloginfo('url'); ?>/adherents" >Adhérents</td>
 </tr>
 </table>

  

 	<!--
 	<ul>
  <li>
 	<?php wp_list_pages('depth=1 & title_li='); ?>
 	</li>
 	</ul>-->
 </ul>
 </div>
<div id="header" role="banner">
	<div id="headerimg">
		<!-- Make the banner clickable (links to home page) -->
		<a href="<?php bloginfo('url'); ?>">
			<img src="<?php bloginfo('stylesheet_directory'); ?>/images/header.jpg"  alt="<?php bloginfo('name'); ?>" /></a>
			<!--<h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>-->
			<!--<div class="description"><?php bloginfo('description'); ?></div>-->
	</div>
</div>

<hr />
