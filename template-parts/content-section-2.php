<?php
/**
 * Template part for displaying banner content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package sahlems
 */
?>
<?php for ($i = 2; $i <= 7; $i++): ?>
<?php if(!empty(get_field("section_{$i}_content"))):?>
    <section class="section-<?= $i; ?> <?= !empty(get_field("section_{$i}_background")) ? "has-background": "";?>" style="background: url('<?php the_field("section_{$i}_background"); ?>');background-repeat: no-repeat;background-size:cover">
        <div class="container">
            <div id="section-<?= $i; ?>-content" class="section-content">
				<?= the_field("section_{$i}_content"); ?>
            </div>
        </div>
    </section>
    <?php endif;?>
<?php endfor; ?>
