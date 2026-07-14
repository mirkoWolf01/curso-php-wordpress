<?php
/**
 * Title: Banner
 * Slug: pixel-grove-dark/banner
 * Categories: pixel-grove-dark
 * Keywords: banner
 * Block Types: core/post-content
 * Post Types: page, wp_template
 */
?>
<!-- wp:group {"metadata":{"name":"Banner"},"style":{"spacing":{"padding":{"top":"0px","bottom":"0px"},"margin":{"top":"0","bottom":"0"}},"background":{"backgroundSize":"cover","backgroundPosition":"50% 50%"},"dimensions":{"minHeight":""}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0px;padding-bottom:0px"><!-- wp:cover {"url":"<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/banner.jpg","id":880,"dimRatio":80,"overlayColor":"base-2","isUserOverlayColor":true,"focalPoint":{"x":0.51,"y":0.67},"minHeight":650,"sizeSlug":"full","className":"banner-cover","style":{"spacing":{"padding":{"right":"20px","left":"20px","top":"80px","bottom":"80px"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover banner-cover" style="margin-top:0;margin-bottom:0;padding-top:80px;padding-right:20px;padding-bottom:80px;padding-left:20px;min-height:650px"><img class="wp-block-cover__image-background wp-image-880 size-full" alt="" src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/banner.jpg" style="object-position:51% 67%" data-object-fit="cover" data-object-position="51% 67%"/><span aria-hidden="true" class="wp-block-cover__background has-base-2-background-color has-background-dim-80 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"wow animate__animated animate__fadeInUp","layout":{"type":"constrained","contentSize":"1000px"}} -->
<div class="wp-block-group wow animate__animated animate__fadeInUp"><!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"64px","fontStyle":"normal","fontWeight":"700"}}} -->
<h1 class="wp-block-heading has-text-align-center" style="font-size:64px;font-style:normal;font-weight:700"><?php echo esc_html__( 'Taxes, Handled with Precision and Peace of Mind', 'pixel-grove-dark' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"padding":{"top":"30px","bottom":"30px"},"margin":{"top":"0","bottom":"0"}},"typography":{"lineHeight":"1.8","fontSize":"16px"}}} -->
<p class="has-text-align-center" style="margin-top:0;margin-bottom:0;padding-top:30px;padding-bottom:30px;font-size:16px;line-height:1.8"><?php echo esc_html__( 'Massa maecenas litora sit tortor facilisi eget dictum tristique curabitur aliquam facilisis mus tellus platea dapibus commodo magna aliquet integer praesent volutpat letius ac elementum lectus Facilisis hac justo nisi dictum sed velit', 'pixel-grove-dark' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"blockGap":"20px","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons" style="margin-top:0;margin-bottom:0"><!-- wp:button {"className":"is-style-fill","style":{"spacing":{"padding":{"left":"55px","right":"55px","top":"15px","bottom":"15px"}}}} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link wp-element-button" style="padding-top:15px;padding-right:55px;padding-bottom:15px;padding-left:55px"><?php echo esc_html__( 'Explore More', 'pixel-grove-dark' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->