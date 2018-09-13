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
    <div class="container">
        <div class="cta">
			<?php the_field('cta'); ?>
        </div>
    </div>
    <div class="container">
        <div id="service-boxes" class="row" >
            <div class="col-xs-3"><a href="/commercial-roofing/"><img src="/wp-content/uploads/2018/08/Commercial-icon.jpg"/><span>Commercial Roofing</span></a></div>
            <div class="col-xs-3"><a href="/resiential-roofing/"><img src="/wp-content/uploads/2018/08/Residential-icon-2.jpg"/><span>Residential Roofing</span></a></div>
            <div class="col-xs-3"><a href="/replacement-windows/"><img src="/wp-content/uploads/2018/08/window-icon.jpg"/><span>Windows/Doors/Siding</span></a></div>
            <div class="col-xs-3"><a href="/gutters/"><img src="/wp-content/uploads/2018/08/Gutter-icon.jpg"/><span>Gutters/Leaf Relief</span></a></div>
        </div>
    </div>
</section>
