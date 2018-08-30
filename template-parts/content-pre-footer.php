<?php
/**
 * Template part for displaying banner content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package sahlems
 */
?>
<section class="pre-footer">
    <div class="container">
        <div class="row">
			<?php the_field('pre_footer_content'); ?>
        </div>
    </div>
</section>
<div class="col-sm-6">
    <aside id="secondary" class="widget-area">
        <section id="wpforms-widget-2" class="widget wpforms-widget">
            <div class="wpforms-container wpforms-container-full sidebar-contact" id="wpforms-209">
                <form id="wpforms-form-209" class="wpforms-validate wpforms-form" data-formid="209" method="post" enctype="multipart/form-data" action="/#wpforms-209" novalidate="novalidate">
                    <div class="wpforms-head-container">
                        <div class="wpforms-title">REQUEST A FREE ESTIMATE</div>
                    </div>
                    <div class="wpforms-field-container">
                        <div id="wpforms-209-field_0-container" class="wpforms-field wpforms-field-name" data-field-id="0"><label class="wpforms-field-label" for="wpforms-209-field_0">Name <span
                                        class="wpforms-required-label">*</span></label>
                            <div class="wpforms-field-row wpforms-field-medium">
                                <div class="wpforms-field-row-block wpforms-first wpforms-one-half"><input type="text" id="wpforms-209-field_0" class="wpforms-field-name-first wpforms-field-required"
                                                                                                           name="wpforms[fields][0][first]" required="" aria-required="true"><label for="wpforms-209-field_0"
                                                                                                                                                                                    class="wpforms-field-sublabel after ">First</label>
                                </div>
                                <div class="wpforms-field-row-block wpforms-one-half"><input type="text" id="wpforms-209-field_0-last" class="wpforms-field-name-last wpforms-field-required"
                                                                                             name="wpforms[fields][0][last]" required="" aria-required="true"><label for="wpforms-209-field_0-last"
                                                                                                                                                                     class="wpforms-field-sublabel after ">Last</label>
                                </div>
                            </div>
                        </div>
                        <div id="wpforms-209-field_1-container" class="wpforms-field wpforms-field-email" data-field-id="1"><label class="wpforms-field-label" for="wpforms-209-field_1">Email <span
                                        class="wpforms-required-label">*</span></label><input type="email" id="wpforms-209-field_1" class="wpforms-field-medium wpforms-field-required" name="wpforms[fields][1]"
                                                                                              required="" aria-required="true"></div>
                        <div id="wpforms-209-field_2-container" class="wpforms-field wpforms-field-textarea" data-field-id="2"><label class="wpforms-field-label" for="wpforms-209-field_2">How Can We Help You? <span
                                        class="wpforms-required-label">*</span></label><textarea id="wpforms-209-field_2" class="wpforms-field-medium wpforms-field-required" name="wpforms[fields][2]" required=""
                                                                                                 aria-required="true"></textarea></div>
                    </div>
                    <div class="wpforms-field wpforms-field-hp"><label for="wpforms-field_hp" class="wpforms-field-label">Email</label><input type="text" name="wpforms[hp]" id="wpforms-field_hp"
                                                                                                                                              class="wpforms-field-medium"></div>
                    <div class="wpforms-submit-container"><input type="hidden" name="wpforms[id]" value="209"><input type="hidden" name="wpforms[author]" value="2"><input type="hidden" name="wpforms[post_id]" value="9">
                        <button type="submit" name="wpforms[submit]" class="wpforms-submit " id="wpforms-submit-209" value="wpforms-submit" data-alt-text="Sending...">Submit</button>
                    </div>
                </form>
            </div>
        </section>
    </aside><!-- #secondary -->
</div>