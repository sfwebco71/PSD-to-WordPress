<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Resto
 */

?>

	</div><!-- #content -->

	<footer>
		<div class="wrapper">
			<ul>
                <li>New York Restaurant</li>
                <li>3926 Anmoore Road</li>
                <li>New York, NY 10014</li>
                <li>718-749-1714</li>
            </ul>
            <ul>
                <li>France Restaurant</li>
                <li>68, rue de la Couronne</li>
                <li>75002 Paris</li>
                <li>02.94.23.69.56</li>
            </ul>
            <ul>
                <li><a href="">Blog</a></li>
                <li><a href="">Career</a></li>
                <li><a href="">Privacy Policy</a></li>
                <li><a href="">Contact</a></li>
            </ul>
            <ul>
                <li><img src="<?php echo(get_template_directory_uri()); ?>/images/white_logo.png" alt="Resto Logo"></li>
                <li>&copy; All Rights Reserved 2016</li>
            </ul>
            <?php dynamic_sidebar( 'footer' ); ?>
		</div><!-- end wrapper -->
	</footer><!-- end wrapper -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
