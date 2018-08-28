<?php
/**
 * Template part for displaying banner content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package sahlems
 */
?>
<section class="banner" style="background: url('<?php the_field('banner'); ?>');background-size: cover;background-repeat: no-repeat;">
    <div class="cta">
		<?php the_field('cta'); ?>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-3">1</div>
            <div class="col-xs-3">2</div>
            <div class="col-xs-3">3</div>
            <div class="col-xs-3">4</div>
        </div>
    </div>
</section>
