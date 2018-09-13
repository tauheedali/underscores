<?php
/**
 * Template part for displaying banner content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package sahlems
 */
?>
<section class="why-us" style="background-image: url('<?php the_field('why_us_background'); ?>'); background-size:cover; background-repeat:no-repeat">
    <div class="container">
		<?php the_field('why_us_content'); ?>
    </div>
</section>
