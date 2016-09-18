<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Resto
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<!-- Start homepage content -->
    <div class="main-banner">
        <img src="<?php echo(get_template_directory_uri()); ?>/images/hero.jpg" alt="Welcome to Resto">
    </div>

    <!-- Main section -->
    <div class="wrapper">
        <section id="home-menu">
            <h2>Menu</h2>
            <ul>
                <li>
                    <span class="dish">Voluptate cillum fugiat.</span>
                    <span class="price">$50</span>
                    <span class="description">Cheese, tomato, mushrooms, onions.</span>
                </li>
                <li>
                    <span class="dish">Metus varius laoreet.</span>
                    <span class="price">$62</span>
                    <span class="description">Chicken, mozzarella cheese, onions.</span>
                </li>
                <li>
                    <span class="dish">Donec sodales magna.</span>
                    <span class="price">$25</span>
                    <span class="description">Tuna, Sweetcorn, Cheese.</span>
                </li>
                <li>
                    <span class="dish">Saugue velit cursus.</span>
                    <span class="price">$30</span>
                    <span class="description">Pineapple, Minced Beef, Cheese.</span>
                </li>
                <li>
                    <span class="dish">Arcu pede enim justo.</span>
                    <span class="price">$45</span>
                    <span class="description">Tuna, Sweetcorn, Cheese.</span>
                </li>
                <li>
                    <span class="dish">Cras dapibussemper nisi.</span>
                    <span class="price">$32</span>
                    <span class="description">Chicken, mozzarella cheese, onions.</span>
                </li>
                <li>
                    <span class="dish">Nam eget dui Etiam.</span>
                    <span class="price">$35</span>
                    <span class="description">Chicken, mozzarella cheese, onions.</span>
                </li>
                <li>
                    <span class="dish">Quam semper libero.</span>
                    <span class="price">$15</span>
                    <span class="description">Cheese, tomato, mushrooms, onions.</span>
                </li>
            </ul>
        </section><!-- End main section -->

 		<!-- Featured section -->
        <section id="featured">
            <ul>
            <?php /* Start the Loop */ ?>
            <?php $myquery = new WP_Query('category_new=menu-items&posts_per_page=4'); ?>
			<?php while ( $myquery->have_posts() ) : $myquery->the_post(); ?>
				<li>
					<?php the_post_thumbnail(); ?>
					<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
					<span><?php echo get_post_meta($post->ID, 'price', true); ?></span>
					<span class="star-<?php echo get_post_meta($post->ID, 'rating', true); ?> rating"></span>
				</li>
			

			<?php endwhile; ?>
            </ul>
        </section>
		</div>
    <!-- End homepage content -->
		

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
