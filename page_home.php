<?php
/**
 * Template Name: Home
 * The template for home page
 *
 * @package sahlems
 */

get_header();
?>
<?php get_template_part('template-parts/content', 'banner'); ?>
    <section class="container">
        <div id="primary" class="content-area row">
            <main id="main" class="site-main col-sm-6">
				<?php
				while (have_posts()) :
					the_post();
					get_template_part('template-parts/content', 'page');
					// If comments are open or we have at least one comment, load up the comment template.
					/*if (comments_open() || get_comments_number()) :
						comments_template();
					endif;*/
				endwhile; // End of the loop.
				?>
            </main><!-- #main -->
            <div class="col-sm-6"><?php get_sidebar(); ?></div>
        </div><!-- #primary -->
    </section>
    <section>
		<?php get_template_part('template-parts/content', 'why-us'); ?>
    </section>
    <section class="pre-footer">
	    <?php get_template_part('template-parts/content', 'pre-footer'); ?>
    </section>
<?php
get_footer();