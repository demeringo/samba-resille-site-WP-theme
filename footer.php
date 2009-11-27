<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
?>

<hr />
<div id="footer" role="contentinfo">
<!-- If you'd like to support WordPress, having the "powered by" link somewhere on your blog is the best way; it's our only promotion or advertising. -->

	<p>Samba Résille est une association de loi 1901. Membre du <a href="http://couac.org" target='_blank'>COUAC</a><br/> 
		Agréée Jeunesse et Education Populaire n° 31-580 / Agréée Entreprise Solidaire n°31-012<br/>
		Siret n° : 403 391 857 00030 / Code APE: 9001Z<br/>
		Entrepreneur du Spectacle: Licence 1-1012395 / Licence 2-1012396 / Licence 3-1012397<br/>	
<br/>
	Site sous licence <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/2.0/fr/"><strong>Creative Commons</strong></a>.Toute reproduction interdite sans autorisation préalable.<br/>
	Crédits photo: <a href="http://www.fanettebruel.com" target='_blank'>Fanette Bruel</a> et Samba Résille. Contact: <a href="mailto:webmaster@samba-resille.org">webmaster@samba-resille.org</a>
	<br/>
			<?php wp_loginout(); ?><?php wp_register(' | ',''); ?>
	</p>
	<p>
	<?php printf(__('%1$s and %2$s.', 'kubrick'), '<a href="' . get_bloginfo('rss2_url') . '">' . __('Entries (RSS)', 'kubrick') . '</a>', '<a href="' . get_bloginfo('comments_rss2_url') . '">' . __('Comments (RSS)', 'kubrick') . '</a>'); ?>
		<!-- <?php printf(__('%d queries. %s seconds.', 'kubrick'), get_num_queries(), timer_stop(0, 3)); ?> -->
	</p>
	<p>
<br/>
	<a href="http://www.samba-resille.org">http://www.samba-resille.org</a> 
	</p>
</div>

<!-- Gorgeous design by Michael Heilemann - http://binarybonsai.com/kubrick/ -->
<?php /* "Just what do you think you're doing Dave?" */ ?>

		<?php wp_footer(); ?>
</body>
</html>
