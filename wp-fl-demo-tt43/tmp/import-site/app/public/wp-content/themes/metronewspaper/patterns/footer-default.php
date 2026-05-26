<?php
 /**
  * Title: Footer Default
  * Slug: metronewspaper/footer-default
  * Categories: metronewspaper
  */
?>

<!-- wp:group {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"spacing":{"padding":{"top":"2.5em"},"margin":{"top":"2.5em"}}},"backgroundColor":"black","textColor":"white","fontSize":"tiny","layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group has-white-color has-black-background-color has-text-color has-background has-link-color has-tiny-font-size" style="margin-top:2.5em;padding-top:2.5em"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:group {"className":"footer-logo","style":{"spacing":{"blockGap":"2px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group footer-logo"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontStyle":"normal","fontWeight":"700"}},"textColor":"primary","fontSize":"large"} -->
<p class="has-primary-color has-text-color has-link-color has-large-font-size" style="font-style:normal;font-weight:700"><?php esc_html_e('Metro', 'metronewspaper'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background","fontSize":"large"} -->
<p class="has-background-color has-text-color has-link-color has-large-font-size"><?php esc_html_e('News', 'metronewspaper'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"20px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph -->
<p><strong><?php esc_html_e('Follow Us', 'metronewspaper'); ?></strong></p>
<!-- /wp:paragraph -->

<!-- wp:social-links {"className":"is-style-default","style":{"spacing":{"blockGap":{"left":"10px"},"margin":{"top":"0px","bottom":"0px"},"padding":{"top":"0px","bottom":"0px"}}}} -->
<ul class="wp-block-social-links is-style-default" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-bottom:0px"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"x"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /-->

<!-- wp:social-link {"url":"#","service":"youtube"} /-->

<!-- wp:social-link {"url":"#","service":"linkedin"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:columns {"style":{"border":{"top":{"color":"var:preset|color|body-text","width":"1px"}},"spacing":{"padding":{"top":"30px"}}}} -->
<div class="wp-block-columns" style="border-top-color:var(--wp--preset--color--body-text);border-top-width:1px;padding-top:30px"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"spacing":{"blockGap":"10px"}},"textColor":"background","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-background-color has-text-color has-link-color"><!-- wp:heading {"level":3,"style":{"typography":{"textTransform":"none"},"spacing":{"margin":{"bottom":"20px"}}},"textColor":"white","fontSize":"normal"} -->
<h3 class="wp-block-heading has-white-color has-text-color has-normal-font-size" style="margin-bottom:20px;text-transform:none"><?php esc_html_e('About Us', 'metronewspaper'); ?></h3>
<!-- /wp:heading -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph -->
<p><?php esc_html_e('A block theme is a WordPress theme with templates entirely composed of blocks. Therefore, in addition to the content of different post types (pages, posts, etc.), the block editor can also be used to edit all areas of the website.', 'metronewspaper'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph -->
<p><strong><?php esc_html_e('Email Us:', 'metronewspaper'); ?></strong> <?php esc_html_e('johndoe@example.com', 'metronewspaper'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><strong><?php esc_html_e('Contact:', 'metronewspaper'); ?></strong> <?php esc_html_e('823-899-4582', 'metronewspaper'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"spacing":{"blockGap":"10px"}},"textColor":"background","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-background-color has-text-color has-link-color"><!-- wp:heading {"level":3,"style":{"typography":{"textTransform":"none"},"spacing":{"margin":{"bottom":"20px"}}},"textColor":"white","fontSize":"normal"} -->
<h3 class="wp-block-heading has-white-color has-text-color has-normal-font-size" style="margin-bottom:20px;text-transform:none"><?php esc_html_e('Editor Picks', 'metronewspaper'); ?></h3>
<!-- /wp:heading -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:query {"queryId":34,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"className":"footer-post-list"} -->
<div class="wp-block-query footer-post-list"><!-- wp:post-template {"layout":{"type":"default"}} -->
<!-- wp:post-featured-image {"isLink":true,"width":"90px","align":"left","style":{"spacing":{"margin":{"right":"15px","bottom":"0px"}}}} /-->

<!-- wp:post-title {"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"13px"},"spacing":{"margin":{"top":"4px"}}}} /-->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
<p></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"spacing":{"blockGap":"10px"}},"textColor":"background","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-background-color has-text-color has-link-color"><!-- wp:heading {"level":3,"style":{"typography":{"textTransform":"none"},"spacing":{"margin":{"bottom":"20px"}}},"textColor":"white","fontSize":"normal"} -->
<h3 class="wp-block-heading has-white-color has-text-color has-normal-font-size" style="margin-bottom:20px;text-transform:none"><?php esc_html_e('Popular Posts', 'metronewspaper'); ?></h3>
<!-- /wp:heading -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:query {"queryId":34,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"className":"footer-post-list"} -->
<div class="wp-block-query footer-post-list"><!-- wp:post-template {"layout":{"type":"default"}} -->
<!-- wp:post-featured-image {"isLink":true,"width":"90px","align":"left","style":{"spacing":{"margin":{"right":"15px","bottom":"0px"}}}} /-->

<!-- wp:post-title {"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"13px"}}} /-->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
<p></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"spacing":{"blockGap":"10px"}},"textColor":"background","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-background-color has-text-color has-link-color"><!-- wp:heading {"level":3,"style":{"typography":{"textTransform":"none"},"spacing":{"margin":{"bottom":"20px"}}},"textColor":"white","fontSize":"normal"} -->
<h3 class="wp-block-heading has-white-color has-text-color has-normal-font-size" style="margin-bottom:20px;text-transform:none"><?php esc_html_e('Navigation', 'metronewspaper'); ?></h3>
<!-- /wp:heading -->

<!-- wp:list {"className":"footer-list","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"fontSize":"tiny"} -->
<ul style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px" class="wp-block-list footer-list has-tiny-font-size"><!-- wp:list-item -->
<li><a href="#"><?php esc_html_e('Home', 'metronewspaper'); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#"><?php esc_html_e('Business', 'metronewspaper'); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#"><?php esc_html_e('Lifestyle', 'metronewspaper'); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#"><?php esc_html_e('Magazine', 'metronewspaper'); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#"><?php esc_html_e('Photography', 'metronewspaper'); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#"><?php esc_html_e('Travel', 'metronewspaper'); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#"><?php esc_html_e('Technology', 'metronewspaper'); ?></a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"className":"site-bottom","style":{"spacing":{"blockGap":"10px","padding":{"bottom":"1rem","top":"1rem"}}},"fontSize":"tiny"} -->
<div class="wp-block-group site-bottom has-tiny-font-size" style="padding-top:1rem;padding-bottom:1rem"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"left","className":"copyright-info","style":{"typography":{"fontSize":"12px","textTransform":"none"}}} -->
<p class="has-text-align-left copyright-info" style="font-size:12px;text-transform:none"><strong><?php esc_html_e('MetroNewspaper', 'metronewspaper'); ?></strong> <?php esc_html_e('©2026. All Rights Reserved', 'metronewspaper'); ?>. <a href="https://wpenjoy.com/themes/metronewspaper" target="_blank"><?php esc_html_e('WordPress Newspaper Theme', 'metronewspaper'); ?></a> <?php esc_html_e('by', 'metronewspaper'); ?> <a href="https://wpenjoy.com" data-type="URL" data-id="https://wpenjoy.com" target="_blank"><?php esc_html_e('WPEnjoy', 'metronewspaper'); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:navigation {"showSubmenuIcon":false,"overlayMenu":"never","className":"footer-menu","style":{"typography":{"fontSize":"12px","textTransform":"none","lineHeight":"1.3"}},"layout":{"type":"flex","justifyContent":"left"}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->