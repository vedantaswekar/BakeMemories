<?php
/**
 * Title: Banner
 * Slug: cakified/banner
 * Categories: cakified, banner
 */
?>

<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() . '/images/slider.webp'); ?>","id":595,"dimRatio":40,"overlayColor":"black","isUserOverlayColor":true,"minHeight":800,"contentPosition":"center center","align":"full","style":{"spacing":{"padding":{"top":"20px","right":"20px","bottom":"20px","left":"20px"},"margin":{"top":"0px","bottom":"0px"}}}} -->
<div class="wp-block-cover alignfull" style="margin-top:0px;margin-bottom:0px;padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px;min-height:800px"><img class="wp-block-cover__image-background wp-image-595" alt="" src="<?php echo esc_url( get_template_directory_uri() . '/images/slider.webp'); ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-black-background-color has-background-dim-40 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:group {"className":"stroke-effect","style":{"spacing":{"padding":{"top":"8px","bottom":"8px","left":"50px","right":"50px"}}},"backgroundColor":"primary","layout":{"type":"constrained"}} -->
<div class="wp-block-group stroke-effect has-primary-background-color has-background" style="padding-top:8px;padding-right:50px;padding-bottom:8px;padding-left:50px"><!-- wp:heading {"level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"typography":{"letterSpacing":"1px","fontSize":"16px","fontStyle":"normal","fontWeight":"500","textTransform":"uppercase"}},"textColor":"white","fontFamily":"open-sans"} -->
<h4 class="wp-block-heading has-white-color has-text-color has-link-color has-open-sans-font-family" style="font-size:16px;font-style:normal;font-weight:500;letter-spacing:1px;text-transform:uppercase"><?php esc_html_e('Black forest cake','cakified'); ?></h4>
<!-- /wp:heading --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":"1.2","textTransform":"capitalize","letterSpacing":"2px"},"spacing":{"margin":{"top":"20px"}}},"fontSize":"banner-title"} -->
<h2 class="wp-block-heading has-text-align-center has-banner-title-font-size" style="margin-top:20px;font-style:normal;font-weight:600;letter-spacing:2px;line-height:1.2;text-transform:capitalize"><?php esc_html_e('Cakes made with','cakified'); ?><br> <?php esc_html_e('love','cakified'); ?></h2>
<!-- /wp:heading -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"50px"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons" style="margin-top:50px"><!-- wp:button {"style":{"border":{"radius":"8px"},"spacing":{"padding":{"left":"34px","right":"34px","top":"14px","bottom":"14px"}},"typography":{"textTransform":"uppercase","letterSpacing":"2px","fontStyle":"normal","fontWeight":"700"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" style="border-radius:8px;padding-top:14px;padding-right:34px;padding-bottom:14px;padding-left:34px;font-style:normal;font-weight:700;letter-spacing:2px;text-transform:uppercase"><?php esc_html_e('Order Here!','cakified'); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->