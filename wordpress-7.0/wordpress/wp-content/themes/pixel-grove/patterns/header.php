<?php
/**
 * Title: Header
 * Slug: pixel-grove/header
 * Categories: header, pixel-grove
 * Keywords: header
 * Block Types: core/template-part/header
 */
?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"20px","bottom":"20px","left":"20px","right":"20px"}}},"backgroundColor":"base","layout":{"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-group alignwide has-base-background-color has-background" id="sticky-header" style="padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px"><!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide"><!-- wp:site-title {"level":0,"style":{"spacing":{"margin":{"right":"var:preset|spacing|20"}},"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"28px","lineHeight":"1.5"},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast"} /-->

<!-- wp:navigation {"icon":"menu","metadata":{"ignoredHookedBlocks":["woocommerce/customer-account"]},"style":{"spacing":{"blockGap":"25px"},"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"medium","layout":{"type":"flex","justifyContent":"right"}} /-->

<!-- wp:group {"className":"header-info-wrapper","style":{"spacing":{"blockGap":"1px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group header-info-wrapper"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:group {"style":{"spacing":{"blockGap":"5px","padding":{"top":"12px","bottom":"12px","left":"20px","right":"20px"}},"border":{"radius":"50px","width":"0px","style":"none"}},"backgroundColor":"primary","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group has-primary-background-color has-background" style="border-style:none;border-width:0px;border-radius:50px;padding-top:12px;padding-right:20px;padding-bottom:12px;padding-left:20px"><!-- wp:paragraph {"style":{"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}}},"textColor":"base-2"} -->
<p class="has-base-2-color has-text-color has-link-color" style="font-size:14px;font-style:normal;font-weight:600"><?php echo esc_html__( 'Schedule a call', 'pixel-grove' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":50,"width":"16px","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":["rgb(255, 255, 255)","#CCC"]},"spacing":{"margin":{"bottom":"2px","left":"5px"}}}} -->
<figure class="wp-block-image size-full is-resized" style="margin-bottom:2px;margin-left:5px"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/phone.png" alt="" class="wp-image-50" style="width:16px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->