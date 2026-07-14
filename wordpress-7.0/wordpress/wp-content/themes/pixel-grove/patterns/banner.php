<?php
/**
 * Title: Banner
 * Slug: pixel-grove/banner
 * Categories: pixel-grove
 * Keywords: banner
 * Block Types: core/post-content
 * Post Types: page, wp_template
 */
?>
<!-- wp:group {"metadata":{"name":"Banner"},"className":"r-spacing","style":{"spacing":{"margin":{"top":"0","bottom":"100px"},"padding":{"right":"0","left":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group r-spacing" style="margin-top:0;margin-bottom:100px;padding-right:0;padding-left:0"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/banner.jpg","id":889,"dimRatio":50,"overlayColor":"contrast","isUserOverlayColor":true,"minHeight":700,"contentPosition":"bottom center","sizeSlug":"full","className":"banner-cover","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"80px","bottom":"80px"}},"border":{"radius":"0px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-center banner-cover" style="border-radius:0px;margin-top:0;margin-bottom:0;padding-top:80px;padding-bottom:80px;min-height:700px"><img class="wp-block-cover__image-background wp-image-889 size-full" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/banner.jpg" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-contrast-background-color has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"wow animate__animated animate__fadeInUp cover-inner","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"800px","justifyContent":"left"}} -->
<div class="wp-block-group wow animate__animated animate__fadeInUp cover-inner" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:paragraph {"align":"left","className":"header-sub","style":{"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"400","letterSpacing":"2px"},"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"spacing":{"margin":{"top":"0","bottom":"12px","left":"0","right":"0"}}},"textColor":"base"} -->
<p class="has-text-align-left header-sub has-base-color has-text-color has-link-color" style="margin-top:0;margin-right:0;margin-bottom:12px;margin-left:0;font-size:16px;font-style:normal;font-weight:400;letter-spacing:2px"><?php echo esc_html__( 'Where Vision Meets Design', 'pixel-grove' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"left","level":1,"style":{"typography":{"fontSize":"56px","lineHeight":"1.2"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<h1 class="wp-block-heading has-text-align-left" style="margin-top:0;margin-bottom:0;font-size:56px;line-height:1.2"><?php echo esc_html__( 'Taxes, Handled with Precision and Peace of Mind', 'pixel-grove' ); ?> </h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}},"spacing":{"padding":{"top":"var:preset|spacing|10"}}},"textColor":"base-2"} -->
<p class="has-text-align-left has-base-2-color has-text-color has-link-color" style="padding-top:var(--wp--preset--spacing--10)"><?php echo esc_html__( 'Dictumst feugiat nec luctus tellus auctor vulputate ullamcorper non mi fermentum viverra molestie eleifend vivamus pretium vestibulum ex tempor porttitor interdum ac lobortis dui lacinia', 'pixel-grove' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"lightbox":{"enabled":false},"id":891,"width":"70px","sizeSlug":"full","linkDestination":"custom","className":"arrow-down","style":{"color":{"duotone":["rgb(255, 255, 255)","#CCC"]}}} -->
<figure class="wp-block-image size-full is-resized arrow-down"><a href="#about-us"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/arrow-down.png" alt="" class="wp-image-891" style="width:70px"/></a></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->