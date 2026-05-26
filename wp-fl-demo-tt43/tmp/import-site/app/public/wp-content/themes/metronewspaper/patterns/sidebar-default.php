<?php
 /**
  * Title: Sidebar Default
  * Slug: metronewspaper/sidebar-default
  * Categories: metronewspaper
  */
?>

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search","buttonText":"Search","buttonPosition":"button-inside","buttonUseIcon":true} /--></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:image {"id":140,"sizeSlug":"full","linkDestination":"custom"} -->
<figure class="wp-block-image size-full"><a href="#" target="_blank" rel="noreferrer noopener"><img src="<?php echo esc_url( get_stylesheet_directory_uri() );?>/assets/images/300x250-2.png" alt="" class="wp-image-140"/></a></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"className":"section-header","layout":{"type":"constrained"}} -->
<div class="wp-block-group section-header"><!-- wp:heading {"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"tiny"} -->
<h2 class="wp-block-heading has-tiny-font-size" style="text-transform:uppercase"><a href="#"><?php esc_html_e('Category Name', 'metronewspaper'); ?></a></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"1.5em"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="margin-top:1.5em"><!-- wp:query {"queryId":13,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"className":"post-list"} -->
<div class="wp-block-query post-list"><!-- wp:post-template {"layout":{"type":"default","columnCount":2}} -->
<!-- wp:post-featured-image {"isLink":true,"height":"120px","style":{"spacing":{"margin":{"bottom":"10px"}}}} /-->

<!-- wp:post-terms {"term":"category","style":{"typography":{"fontSize":"10px","textTransform":"uppercase","fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|vivid-red"},":hover":{"color":{"text":"var:preset|color|body-text"}}}}}} /-->

<!-- wp:post-title {"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"right":"0px","bottom":"0px","left":"0px","top":"5px"}}},"fontSize":"small"} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"6px","margin":{"top":"5px"}},"typography":{"fontSize":"12px"},"elements":{"link":{"color":{"text":"var:preset|color|body-text"},":hover":{"color":{"text":"var:preset|color|body-text"}}}}},"textColor":"body-text","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group has-body-text-color has-text-color has-link-color" style="margin-top:5px;font-size:12px"><!-- wp:paragraph -->
<p>by</p>
<!-- /wp:paragraph -->

<!-- wp:post-author-name {"isLink":true,"style":{"typography":{"textDecoration":"underline"}}} /-->

<!-- wp:post-date /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
<p></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"1.5rem"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"className":"section-header","layout":{"type":"constrained"}} -->
<div class="wp-block-group section-header"><!-- wp:heading {"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"tiny"} -->
<h2 class="wp-block-heading has-tiny-font-size" style="text-transform:uppercase"><strong><?php esc_html_e('Recent Posts', 'metronewspaper'); ?></strong></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"1.5em"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="margin-top:1.5em"><!-- wp:query {"queryId":13,"query":{"perPage":4,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"className":"featured-left post-list"} -->
<div class="wp-block-query featured-left post-list"><!-- wp:post-template {"fontSize":"extra-small","layout":{"type":"default","columnCount":2}} -->
<!-- wp:post-featured-image {"isLink":true,"width":"90px","height":"90px","align":"left","style":{"spacing":{"margin":{"right":"15px","bottom":"0px"}}}} /-->

<!-- wp:post-terms {"term":"category","style":{"typography":{"fontSize":"10px","textTransform":"uppercase","fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|vivid-red"},":hover":{"color":{"text":"var:preset|color|body-text"}}}}}} /-->

<!-- wp:post-title {"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"top":"5px","bottom":"0px"}}},"fontSize":"extra-small"} /-->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
<p></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"widget-categories","style":{"spacing":{"blockGap":"1.5rem","padding":{"top":"20px","bottom":"20px","left":"20px","right":"20px"}},"border":{"radius":"3px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group widget-categories" style="border-radius:3px;padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px"><!-- wp:heading {"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"tiny"} -->
<h2 class="wp-block-heading has-tiny-font-size" style="text-transform:uppercase"><strong><?php esc_html_e('Categories', 'metronewspaper'); ?></strong></h2>
<!-- /wp:heading -->

<!-- wp:categories {"showPostCounts":true,"showOnlyTopLevel":true,"style":{"spacing":{"margin":{"top":"15px"}}},"fontSize":"tiny"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->