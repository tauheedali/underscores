<?php
/**
 * Template part for displaying banner content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package sahlems
 */
?>
<section class="section-2" style="background: url('<?php the_field('why_us'); ?>');">
    <div class="container">
		<?php the_field('why_us_content'); ?>
    </div>
</section>
