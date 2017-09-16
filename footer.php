<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ufateplodom
 * <?php echo get_template_directory_uri(); ?>
 * <?php echo $options['site__desc']; ?>
 */

?>

	<?php	$options = get_option( 'site__settings' );?>




</div><!-- #page -->	


<script src="<?php echo get_template_directory_uri(); ?>/js/scripts.min.js"></script>

<?php wp_footer(); ?>

</body>
</html>
