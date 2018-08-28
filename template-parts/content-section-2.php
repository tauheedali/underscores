<?php
/**
 * Template part for displaying banner content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package sahlems
 */
?>
<section class="section-2" style="background: url('<?php the_field('section_2_background'); ?>');">
    <div>
		<?php the_field('section_2'); ?>
    </div>
</section>
