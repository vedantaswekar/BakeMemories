<?php
/**
 * Title: Latest News
 * Slug: cakified/latest-news
 * Categories: cakified, latest-news
 */
?>

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"40px","bottom":"120px","left":"20px","right":"20px"}},"color":{"background":"#ffe4e8"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-background" style="background-color:#ffe4e8;margin-top:0;margin-bottom:0;padding-top:40px;padding-right:20px;padding-bottom:120px;padding-left:20px"><!-- wp:group {"className":"section-wave","style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"color":{"background":"#ffe4e8"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group section-wave has-background" style="background-color:#ffe4e8;margin-top:0;margin-bottom:0"></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:group {"className":"stroke-effect","style":{"spacing":{"padding":{"top":"8px","bottom":"8px","left":"40px","right":"40px"}}},"backgroundColor":"primary","layout":{"type":"default"}} -->
<div class="wp-block-group stroke-effect has-primary-background-color has-background" style="padding-top:8px;padding-right:40px;padding-bottom:8px;padding-left:40px"><!-- wp:heading {"level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"typography":{"textTransform":"uppercase","letterSpacing":"1px","fontStyle":"normal","fontWeight":"700"}},"textColor":"white","fontSize":"body-text","fontFamily":"open-sans"} -->
<h4 class="wp-block-heading has-white-color has-text-color has-link-color has-open-sans-font-family has-body-text-font-size" style="font-style:normal;font-weight:700;letter-spacing:1px;text-transform:uppercase"><?php esc_html_e('Latest News','cakified'); ?></h4>
<!-- /wp:heading --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"700"},"spacing":{"margin":{"top":"var:preset|spacing|30"}}},"fontSize":"section-title"} -->
<h2 class="wp-block-heading has-text-align-center has-section-title-font-size" style="margin-top:var(--wp--preset--spacing--30);font-style:normal;font-weight:700"><?php esc_html_e('Our Insights & Articles','cakified'); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"20px"} -->
<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:query {"queryId":35,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"metadata":{"categories":["posts"],"patternName":"core/query-standard-posts","name":"Standard"}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":null}} -->
<!-- wp:group {"className":"shadow","style":{"border":{"radius":"32px"},"spacing":{"padding":{"top":"20px","bottom":"20px","left":"20px","right":"20px"}}},"backgroundColor":"white","layout":{"type":"constrained"}} -->
<div class="wp-block-group shadow has-white-background-color has-background" style="border-radius:32px;padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px"><!-- wp:group {"className":"pos-relative","layout":{"type":"constrained"}} -->
<div class="wp-block-group pos-relative"><!-- wp:post-featured-image {"isLink":true,"align":"wide","style":{"border":{"radius":{"topLeft":"12px","topRight":"12px","bottomLeft":"12px","bottomRight":"12px"}}}} /-->

<!-- wp:group {"className":"ln-post-date","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group ln-post-date" style="margin-top:0;margin-bottom:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"5px","bottom":"5px","left":"15px","right":"15px"}},"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"border":{"radius":"8px"},"typography":{"letterSpacing":"0.5px"}},"backgroundColor":"primary","textColor":"white","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-white-color has-primary-background-color has-text-color has-background has-link-color" style="border-radius:8px;padding-top:5px;padding-right:15px;padding-bottom:5px;padding-left:15px;letter-spacing:0.5px"><!-- wp:post-date {"textAlign":"center","format":"F j, Y","style":{"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"400"}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"15px","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:15px;margin-bottom:0"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:post-terms {"term":"category","style":{"typography":{"fontSize":"13px","fontStyle":"normal","fontWeight":"600"}}} /-->

<!-- wp:post-author {"showAvatar":false,"isLink":true,"style":{"typography":{"fontSize":"13px","fontStyle":"normal","fontWeight":"600"}}} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"isLink":true,"style":{"typography":{"fontSize":"20px","letterSpacing":"1px","lineHeight":"1.4","fontStyle":"normal","fontWeight":"700"},"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} /-->

<!-- wp:post-excerpt {"excerptLength":16,"style":{"typography":{"lineHeight":"1.8"},"spacing":{"margin":{"top":"15px"}}}} /-->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"border":{"radius":"12px"},"spacing":{"padding":{"left":"15px","right":"15px","top":"10px","bottom":"10px"}},"typography":{"fontStyle":"normal","fontWeight":"700","textTransform":"uppercase","letterSpacing":"1px","fontSize":"14px"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-custom-font-size wp-element-button" style="border-radius:12px;padding-top:10px;padding-right:15px;padding-bottom:10px;padding-left:15px;font-size:14px;font-style:normal;font-weight:700;letter-spacing:1px;text-transform:uppercase"><?php esc_html_e('Read More','cakified'); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->