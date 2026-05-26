<?php
 /**
  * Title: Homepage
  * Slug: metronewspaper/homepage
  * Categories: metronewspaper
  */
?>

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"layout":{"type":"constrained"}} -->
<div id="wp--skip-link--target" class="wp-block-group" style="margin-top:0px;margin-bottom:0px"><!-- wp:group {"className":"content-section","layout":{"type":"constrained"}} -->
<div class="wp-block-group content-section"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%"><!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|vivid-red"}}},"typography":{"textTransform":"uppercase","fontSize":"13px"}},"textColor":"vivid-red"} -->
<h2 class="wp-block-heading has-vivid-red-color has-text-color has-link-color" style="font-size:13px;text-transform:uppercase"><?php esc_html_e('Featured News', 'metronewspaper'); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"10px"},"padding":{"bottom":"10px"}},"border":{"bottom":{"color":"var:preset|color|background-secondary","width":"1px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--background-secondary);border-bottom-width:1px;margin-top:10px;padding-bottom:10px"><!-- wp:query {"queryId":23,"query":{"perPage":"1","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"className":"featured-right"} -->
<div class="wp-block-query featured-right"><!-- wp:post-template {"layout":{"type":"default"}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9","height":"","style":{"spacing":{"margin":{"bottom":"10px"}}}} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:post-terms {"term":"category","style":{"typography":{"fontSize":"10px","textTransform":"uppercase","fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|vivid-red"},":hover":{"color":{"text":"var:preset|color|body-text"}}}}}} /-->

<!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"top":"5px"}}},"fontSize":"medium"} /-->

<!-- wp:group {"className":"entry-meta","style":{"spacing":{"blockGap":"6px"},"typography":{"fontSize":"12px"},"elements":{"link":{"color":{"text":"var:preset|color|body-text"},":hover":{"color":{"text":"var:preset|color|body-text"}}}}},"textColor":"body-text","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group entry-meta has-body-text-color has-text-color has-link-color" style="font-size:12px"><!-- wp:paragraph -->
<p>by</p>
<!-- /wp:paragraph -->

<!-- wp:post-author-name {"isLink":true,"style":{"typography":{"textDecoration":"underline"}}} /-->

<!-- wp:post-date /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"18px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:18px"><!-- wp:query {"queryId":22,"query":{"perPage":4,"pages":0,"offset":"1","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"className":"post-list"} -->
<div class="wp-block-query post-list"><!-- wp:post-template {"layout":{"type":"default"}} -->
<!-- wp:post-featured-image {"isLink":true,"width":"80px","height":"80px","align":"left","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} /-->

<!-- wp:post-terms {"term":"category","style":{"typography":{"fontSize":"10px","textTransform":"uppercase","fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|vivid-red"},":hover":{"color":{"text":"var:preset|color|body-text"}}}}}} /-->

<!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"top":"5px","bottom":"0px"}}},"fontSize":"small"} /-->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:query {"queryId":23,"query":{"perPage":"1","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template {"className":"post-card","layout":{"type":"default"}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","height":"","overlayColor":"foreground","dimRatio":30,"style":{"color":{"duotone":"unset"}}} /-->

<!-- wp:group {"className":"entry-header","style":{"spacing":{"padding":{"right":"20px","left":"20px","bottom":"20px","top":"20px"},"blockGap":"5px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group entry-header" style="padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px"><!-- wp:post-terms {"term":"category","style":{"typography":{"fontSize":"10px","textTransform":"uppercase","fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|background"},":hover":{"color":{"text":"var:preset|color|background"}}}}}} /-->

<!-- wp:post-title {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|background"},":hover":{"color":{"text":"var:preset|color|background"}}}},"spacing":{"margin":{"top":"10px","bottom":"0px"}}},"fontSize":"large"} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"6px"},"typography":{"fontSize":"12px"},"elements":{"link":{"color":{"text":"var:preset|color|background"},":hover":{"color":{"text":"var:preset|color|background"}}}}},"textColor":"background","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group has-background-color has-text-color has-link-color" style="font-size:12px"><!-- wp:paragraph -->
<p>by</p>
<!-- /wp:paragraph -->

<!-- wp:post-author-name {"isLink":true,"style":{"typography":{"textDecoration":"underline"}}} /-->

<!-- wp:post-date /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"18px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:18px"><!-- wp:query {"queryId":41,"query":{"perPage":"4","pages":0,"offset":"1","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template {"className":"post-card","style":{"spacing":{"blockGap":"18px"}},"fontSize":"medium","layout":{"type":"grid","columnCount":2}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9","overlayColor":"foreground","dimRatio":30,"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} /-->

<!-- wp:group {"className":"entry-header","style":{"spacing":{"padding":{"right":"15px","left":"15px","bottom":"15px","top":"15px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group entry-header" style="padding-top:15px;padding-right:15px;padding-bottom:15px;padding-left:15px"><!-- wp:post-terms {"term":"category","style":{"typography":{"fontSize":"10px","textTransform":"uppercase","fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|background"},":hover":{"color":{"text":"var:preset|color|background"}}}}}} /-->

<!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"top":"5px"}},"elements":{"link":{"color":{"text":"var:preset|color|background"},":hover":{"color":{"text":"var:preset|color|background"}}}}},"fontSize":"medium"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%"><!-- wp:image {"id":140,"sizeSlug":"full","linkDestination":"none","style":{"spacing":{"margin":{"bottom":"15px"}}}} -->
<figure class="wp-block-image size-full" style="margin-bottom:15px"><img src="<?php echo esc_url( get_stylesheet_directory_uri() );?>/assets/images/300x250-2.png" alt="" class="wp-image-140"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0px;margin-bottom:0px"><!-- wp:group {"className":"section-header","layout":{"type":"default"}} -->
<div class="wp-block-group section-header"><!-- wp:heading {"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"tiny"} -->
<h2 class="wp-block-heading has-tiny-font-size" style="text-transform:uppercase"><a href="#"><?php esc_html_e('Category Name', 'metronewspaper'); ?></a></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"18px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:18px"><!-- wp:query {"queryId":22,"query":{"perPage":4,"pages":0,"offset":"","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"className":"post-list"} -->
<div class="wp-block-query post-list"><!-- wp:post-template {"layout":{"type":"default"}} -->
<!-- wp:post-featured-image {"isLink":true,"width":"80px","height":"80px","align":"left","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} /-->

<!-- wp:post-terms {"term":"category","style":{"typography":{"fontSize":"10px","textTransform":"uppercase","fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|vivid-red"},":hover":{"color":{"text":"var:preset|color|body-text"}}}}}} /-->

<!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"top":"5px","bottom":"0px"}}},"fontSize":"small"} /-->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"content-section","style":{"spacing":{"margin":{"top":"2%"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group content-section" style="margin-top:2%"><!-- wp:group {"className":"section-header","layout":{"type":"default"}} -->
<div class="wp-block-group section-header"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:heading {"style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}},"typography":{"textTransform":"uppercase"}},"fontSize":"tiny"} -->
<h2 class="wp-block-heading has-tiny-font-size" style="margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px;text-transform:uppercase"><a href="#"><?php esc_html_e('Category Name', 'metronewspaper'); ?></a></h2>
<!-- /wp:heading --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"1.5em"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="margin-top:1.5em"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:query {"queryId":8,"query":{"perPage":"1","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false,"taxQuery":null,"parents":[]},"className":"featured-right"} -->
<div class="wp-block-query featured-right"><!-- wp:post-template {"className":"post-card","layout":{"type":"default"}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","height":"","dimRatio":30} /-->

<!-- wp:group {"className":"entry-header","style":{"spacing":{"padding":{"right":"20px","left":"20px","bottom":"20px","top":"20px"},"blockGap":"5px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group entry-header" style="padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px"><!-- wp:post-terms {"term":"category","style":{"typography":{"fontSize":"10px","textTransform":"uppercase","fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|background"},":hover":{"color":{"text":"var:preset|color|background"}}}}}} /-->

<!-- wp:post-title {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|background"},":hover":{"color":{"text":"var:preset|color|background"}}}},"spacing":{"margin":{"top":"10px","bottom":"0px"}}},"fontSize":"large"} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"6px"},"typography":{"fontSize":"12px"},"elements":{"link":{"color":{"text":"var:preset|color|background"},":hover":{"color":{"text":"var:preset|color|background"}}}}},"textColor":"background","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group has-background-color has-text-color has-link-color" style="font-size:12px"><!-- wp:paragraph -->
<p>by</p>
<!-- /wp:paragraph -->

<!-- wp:post-author-name {"isLink":true,"style":{"typography":{"textDecoration":"underline"}}} /-->

<!-- wp:post-date /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
<p></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:query {"queryId":13,"query":{"perPage":2,"pages":0,"offset":"1","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false,"taxQuery":null},"className":"featured-left"} -->
<div class="wp-block-query featured-left"><!-- wp:post-template {"layout":{"type":"grid","columnCount":2}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9","style":{"spacing":{"margin":{"bottom":"10px"}}}} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:post-terms {"term":"category","style":{"typography":{"fontSize":"10px","textTransform":"uppercase","fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|vivid-red"},":hover":{"color":{"text":"var:preset|color|body-text"}}}}}} /-->

<!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"top":"10px"}}},"fontSize":"medium"} /-->

<!-- wp:group {"className":"entry-meta","style":{"spacing":{"blockGap":"6px"},"typography":{"fontSize":"12px"},"elements":{"link":{"color":{"text":"var:preset|color|body-text"},":hover":{"color":{"text":"var:preset|color|body-text"}}}}},"textColor":"body-text","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group entry-meta has-body-text-color has-text-color has-link-color" style="font-size:12px"><!-- wp:paragraph -->
<p>by</p>
<!-- /wp:paragraph -->

<!-- wp:post-author-name {"isLink":true,"style":{"typography":{"textDecoration":"underline"}}} /-->

<!-- wp:post-date /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"18px"},"padding":{"top":"18px"}},"border":{"top":{"color":"var:preset|color|background-secondary","width":"1px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--background-secondary);border-top-width:1px;margin-top:18px;padding-top:18px"><!-- wp:query {"queryId":13,"query":{"perPage":2,"pages":0,"offset":"3","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false,"taxQuery":null},"className":"featured-left"} -->
<div class="wp-block-query featured-left"><!-- wp:post-template {"layout":{"type":"grid","columnCount":2}} -->
<!-- wp:post-terms {"term":"category","style":{"typography":{"fontSize":"10px","textTransform":"uppercase","fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|vivid-red"},":hover":{"color":{"text":"var:preset|color|body-text"}}}}}} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"top":"10px"}}},"fontSize":"medium"} /-->

<!-- wp:group {"className":"entry-meta","style":{"spacing":{"blockGap":"6px"},"typography":{"fontSize":"12px"},"elements":{"link":{"color":{"text":"var:preset|color|body-text"},":hover":{"color":{"text":"var:preset|color|body-text"}}}}},"textColor":"body-text","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group entry-meta has-body-text-color has-text-color has-link-color" style="font-size:12px"><!-- wp:paragraph -->
<p>by</p>
<!-- /wp:paragraph -->

<!-- wp:post-author-name {"isLink":true,"style":{"typography":{"textDecoration":"underline"}}} /-->

<!-- wp:post-date /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"content-section content-3-col-1","style":{"spacing":{"margin":{"top":"2%"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group content-section content-3-col-1" style="margin-top:2%"><!-- wp:group {"className":"section-header","layout":{"type":"default"}} -->
<div class="wp-block-group section-header"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:heading {"style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}},"typography":{"textTransform":"uppercase"}},"fontSize":"tiny"} -->
<h2 class="wp-block-heading has-tiny-font-size" style="margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px;text-transform:uppercase"><a href="#"><?php esc_html_e('Category Name', 'metronewspaper'); ?></a></h2>
<!-- /wp:heading --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0px","margin":{"top":"20px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="margin-top:20px"><!-- wp:query {"queryId":13,"query":{"perPage":3,"pages":0,"offset":"","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false,"taxQuery":null},"className":"featured-left"} -->
<div class="wp-block-query featured-left"><!-- wp:post-template {"className":"post-card","layout":{"type":"grid","columnCount":3}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9","dimRatio":30,"style":{"spacing":{"margin":{"bottom":"10px"}}}} /-->

<!-- wp:group {"className":"entry-header","style":{"spacing":{"padding":{"right":"20px","left":"20px","bottom":"20px","top":"20px"},"blockGap":"5px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group entry-header" style="padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px"><!-- wp:post-terms {"term":"category","style":{"typography":{"fontSize":"10px","textTransform":"uppercase","fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|background"},":hover":{"color":{"text":"var:preset|color|background"}}}}}} /-->

<!-- wp:post-title {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|background"},":hover":{"color":{"text":"var:preset|color|background"}}}},"spacing":{"margin":{"top":"10px","bottom":"0px"}}},"fontSize":"big"} /-->

<!-- wp:group {"className":"entry-meta","style":{"spacing":{"blockGap":"6px"},"typography":{"fontSize":"12px"},"elements":{"link":{"color":{"text":"var:preset|color|background"},":hover":{"color":{"text":"var:preset|color|background"}}}}},"textColor":"background","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group entry-meta has-background-color has-text-color has-link-color" style="font-size:12px"><!-- wp:paragraph -->
<p>by</p>
<!-- /wp:paragraph -->

<!-- wp:post-author-name {"isLink":true,"style":{"typography":{"textDecoration":"underline"}}} /-->

<!-- wp:post-date /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"18px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:18px"><!-- wp:query {"queryId":22,"query":{"perPage":3,"pages":0,"offset":"3","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:post-featured-image {"isLink":true,"width":"80px","height":"80px","align":"left","style":{"spacing":{"margin":{"top":"0px","bottom":"0px","right":"15px"}}}} /-->

<!-- wp:post-terms {"term":"category","style":{"typography":{"fontSize":"10px","textTransform":"uppercase","fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|vivid-red"},":hover":{"color":{"text":"var:preset|color|body-text"}}}}}} /-->

<!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"top":"5px","bottom":"0px"}}},"fontSize":"small"} /-->

<!-- wp:group {"className":"entry-meta","style":{"spacing":{"blockGap":"6px"},"typography":{"fontSize":"12px"},"elements":{"link":{"color":{"text":"var:preset|color|body-text"},":hover":{"color":{"text":"var:preset|color|body-text"}}}}},"textColor":"body-text","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group entry-meta has-body-text-color has-text-color has-link-color" style="font-size:12px"><!-- wp:paragraph -->
<p>by</p>
<!-- /wp:paragraph -->

<!-- wp:post-author-name {"isLink":true,"style":{"typography":{"textDecoration":"underline"}}} /-->

<!-- wp:post-date /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"18px"},"padding":{"top":"18px"}},"border":{"top":{"color":"var:preset|color|background-secondary","width":"1px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--background-secondary);border-top-width:1px;margin-top:18px;padding-top:18px"><!-- wp:query {"queryId":22,"query":{"perPage":3,"pages":0,"offset":"6","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:post-featured-image {"isLink":true,"width":"80px","height":"80px","align":"left","style":{"spacing":{"margin":{"top":"0px","bottom":"0px","right":"15px"}}}} /-->

<!-- wp:post-terms {"term":"category","style":{"typography":{"fontSize":"10px","textTransform":"uppercase","fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|vivid-red"},":hover":{"color":{"text":"var:preset|color|body-text"}}}}}} /-->

<!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"top":"5px","bottom":"0px"}}},"fontSize":"small"} /-->

<!-- wp:group {"className":"entry-meta","style":{"spacing":{"blockGap":"6px"},"typography":{"fontSize":"12px"},"elements":{"link":{"color":{"text":"var:preset|color|body-text"},":hover":{"color":{"text":"var:preset|color|body-text"}}}}},"textColor":"body-text","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group entry-meta has-body-text-color has-text-color has-link-color" style="font-size:12px"><!-- wp:paragraph -->
<p>by</p>
<!-- /wp:paragraph -->

<!-- wp:post-author-name {"isLink":true,"style":{"typography":{"textDecoration":"underline"}}} /-->

<!-- wp:post-date /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"2%"},"padding":{"top":"30px","bottom":"30px"}},"color":{"background":"#f5f5f5"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignfull has-background" style="background-color:#f5f5f5;margin-top:2%;padding-top:30px;padding-bottom:30px"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}},"typography":{"textTransform":"uppercase"}},"fontSize":"tiny"} -->
<h2 class="wp-block-heading has-tiny-font-size" style="margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px;text-transform:uppercase"><a href="#"><?php esc_html_e('Category Name', 'metronewspaper'); ?></a></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"post-divide","style":{"spacing":{"margin":{"top":"18px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group post-divide" style="margin-top:18px"><!-- wp:query {"queryId":22,"query":{"perPage":4,"pages":0,"offset":"","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":4}} -->
<!-- wp:post-featured-image {"isLink":true,"width":"90px","height":"90px","align":"left","style":{"spacing":{"margin":{"top":"0px","bottom":"0px","right":"15px"}}}} /-->

<!-- wp:post-terms {"term":"category","style":{"typography":{"fontSize":"10px","textTransform":"uppercase","fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|vivid-red"},":hover":{"color":{"text":"var:preset|color|body-text"}}}}}} /-->

<!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"top":"5px","bottom":"0px"}}},"fontSize":"small"} /-->

<!-- wp:group {"className":"entry-meta","style":{"spacing":{"blockGap":"6px"},"typography":{"fontSize":"12px"},"elements":{"link":{"color":{"text":"var:preset|color|body-text"},":hover":{"color":{"text":"var:preset|color|body-text"}}}}},"textColor":"body-text","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group entry-meta has-body-text-color has-text-color has-link-color" style="font-size:12px"><!-- wp:paragraph -->
<p>by</p>
<!-- /wp:paragraph -->

<!-- wp:post-author-name {"isLink":true,"style":{"typography":{"textDecoration":"underline"}}} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"content-section","style":{"spacing":{"margin":{"top":"2%"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group content-section" style="margin-top:2%"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:group {"className":"section-header","layout":{"type":"default"}} -->
<div class="wp-block-group section-header"><!-- wp:heading {"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"tiny"} -->
<h2 class="wp-block-heading has-tiny-font-size" style="text-transform:uppercase"><a href="#"><?php esc_html_e('Category Name', 'metronewspaper'); ?></a></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"20px"},"padding":{"bottom":"15px"}},"border":{"bottom":{"color":"var:preset|color|background-secondary","width":"1px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--background-secondary);border-bottom-width:1px;margin-top:20px;padding-bottom:15px"><!-- wp:query {"queryId":19,"query":{"perPage":"1","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false,"taxQuery":null,"parents":[]}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"default"}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9","height":"","style":{"spacing":{"margin":{"bottom":"10px"}}}} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:post-terms {"term":"category","style":{"typography":{"fontSize":"10px","textTransform":"uppercase","fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|vivid-red"},":hover":{"color":{"text":"var:preset|color|body-text"}}}}}} /-->

<!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"top":"5px"}}},"fontSize":"big"} /-->

<!-- wp:group {"className":"entry-meta","style":{"spacing":{"blockGap":"6px"},"typography":{"fontSize":"12px"},"elements":{"link":{"color":{"text":"var:preset|color|body-text"},":hover":{"color":{"text":"var:preset|color|body-text"}}}}},"textColor":"body-text","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group entry-meta has-body-text-color has-text-color has-link-color" style="font-size:12px"><!-- wp:paragraph -->
<p>by</p>
<!-- /wp:paragraph -->

<!-- wp:post-author-name {"isLink":true,"style":{"typography":{"textDecoration":"underline"}}} /-->

<!-- wp:post-date /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"18px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:18px"><!-- wp:query {"queryId":22,"query":{"perPage":3,"pages":0,"offset":"1","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"className":"post-list"} -->
<div class="wp-block-query post-list"><!-- wp:post-template {"layout":{"type":"default"}} -->
<!-- wp:post-featured-image {"isLink":true,"width":"80px","height":"80px","align":"left","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} /-->

<!-- wp:post-terms {"term":"category","style":{"typography":{"fontSize":"10px","textTransform":"uppercase","fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|vivid-red"},":hover":{"color":{"text":"var:preset|color|body-text"}}}}}} /-->

<!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"top":"5px","bottom":"0px"}}},"fontSize":"small"} /-->

<!-- wp:group {"className":"entry-meta","style":{"spacing":{"blockGap":"6px"},"typography":{"fontSize":"12px"},"elements":{"link":{"color":{"text":"var:preset|color|body-text"},":hover":{"color":{"text":"var:preset|color|body-text"}}}}},"textColor":"body-text","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group entry-meta has-body-text-color has-text-color has-link-color" style="font-size:12px"><!-- wp:paragraph -->
<p>by</p>
<!-- /wp:paragraph -->

<!-- wp:post-author-name {"isLink":true,"style":{"typography":{"textDecoration":"underline"}}} /-->

<!-- wp:post-date /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:group {"className":"section-header","layout":{"type":"default"}} -->
<div class="wp-block-group section-header"><!-- wp:heading {"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"tiny"} -->
<h2 class="wp-block-heading has-tiny-font-size" style="text-transform:uppercase"><a href="#"><?php esc_html_e('Category Name', 'metronewspaper'); ?></a></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"20px"},"padding":{"bottom":"15px"}},"border":{"bottom":{"color":"var:preset|color|background-secondary","width":"1px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--background-secondary);border-bottom-width:1px;margin-top:20px;padding-bottom:15px"><!-- wp:query {"queryId":19,"query":{"perPage":"1","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false,"taxQuery":null,"parents":[]}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"default"}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9","height":"","style":{"spacing":{"margin":{"bottom":"10px"}}}} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:post-terms {"term":"category","style":{"typography":{"fontSize":"10px","textTransform":"uppercase","fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|vivid-red"},":hover":{"color":{"text":"var:preset|color|body-text"}}}}}} /-->

<!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"top":"5px"}}},"fontSize":"big"} /-->

<!-- wp:group {"className":"entry-meta","style":{"spacing":{"blockGap":"6px"},"typography":{"fontSize":"12px"},"elements":{"link":{"color":{"text":"var:preset|color|body-text"},":hover":{"color":{"text":"var:preset|color|body-text"}}}}},"textColor":"body-text","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group entry-meta has-body-text-color has-text-color has-link-color" style="font-size:12px"><!-- wp:paragraph -->
<p>by</p>
<!-- /wp:paragraph -->

<!-- wp:post-author-name {"isLink":true,"style":{"typography":{"textDecoration":"underline"}}} /-->

<!-- wp:post-date /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"18px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:18px"><!-- wp:query {"queryId":22,"query":{"perPage":3,"pages":0,"offset":"1","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"className":"post-list"} -->
<div class="wp-block-query post-list"><!-- wp:post-template {"layout":{"type":"default"}} -->
<!-- wp:post-featured-image {"isLink":true,"width":"80px","height":"80px","align":"left","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} /-->

<!-- wp:post-terms {"term":"category","style":{"typography":{"fontSize":"10px","textTransform":"uppercase","fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|vivid-red"},":hover":{"color":{"text":"var:preset|color|body-text"}}}}}} /-->

<!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"top":"5px","bottom":"0px"}}},"fontSize":"small"} /-->

<!-- wp:group {"className":"entry-meta","style":{"spacing":{"blockGap":"6px"},"typography":{"fontSize":"12px"},"elements":{"link":{"color":{"text":"var:preset|color|body-text"},":hover":{"color":{"text":"var:preset|color|body-text"}}}}},"textColor":"body-text","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group entry-meta has-body-text-color has-text-color has-link-color" style="font-size:12px"><!-- wp:paragraph -->
<p>by</p>
<!-- /wp:paragraph -->

<!-- wp:post-author-name {"isLink":true,"style":{"typography":{"textDecoration":"underline"}}} /-->

<!-- wp:post-date /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:group {"className":"section-header","layout":{"type":"default"}} -->
<div class="wp-block-group section-header"><!-- wp:heading {"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"tiny"} -->
<h2 class="wp-block-heading has-tiny-font-size" style="text-transform:uppercase"><a href="#"><?php esc_html_e('Category Name', 'metronewspaper'); ?></a></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"20px"},"padding":{"bottom":"15px"}},"border":{"bottom":{"color":"var:preset|color|background-secondary","width":"1px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--background-secondary);border-bottom-width:1px;margin-top:20px;padding-bottom:15px"><!-- wp:query {"queryId":19,"query":{"perPage":"1","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false,"taxQuery":null,"parents":[]}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"default"}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9","height":"","style":{"spacing":{"margin":{"bottom":"10px"}}}} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:post-terms {"term":"category","style":{"typography":{"fontSize":"10px","textTransform":"uppercase","fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|vivid-red"},":hover":{"color":{"text":"var:preset|color|body-text"}}}}}} /-->

<!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"top":"5px"}}},"fontSize":"big"} /-->

<!-- wp:group {"className":"entry-meta","style":{"spacing":{"blockGap":"6px"},"typography":{"fontSize":"12px"},"elements":{"link":{"color":{"text":"var:preset|color|body-text"},":hover":{"color":{"text":"var:preset|color|body-text"}}}}},"textColor":"body-text","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group entry-meta has-body-text-color has-text-color has-link-color" style="font-size:12px"><!-- wp:paragraph -->
<p>by</p>
<!-- /wp:paragraph -->

<!-- wp:post-author-name {"isLink":true,"style":{"typography":{"textDecoration":"underline"}}} /-->

<!-- wp:post-date /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"18px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:18px"><!-- wp:query {"queryId":22,"query":{"perPage":3,"pages":0,"offset":"1","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"className":"post-list"} -->
<div class="wp-block-query post-list"><!-- wp:post-template {"layout":{"type":"default"}} -->
<!-- wp:post-featured-image {"isLink":true,"width":"80px","height":"80px","align":"left","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} /-->

<!-- wp:post-terms {"term":"category","style":{"typography":{"fontSize":"10px","textTransform":"uppercase","fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|vivid-red"},":hover":{"color":{"text":"var:preset|color|body-text"}}}}}} /-->

<!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"top":"5px","bottom":"0px"}}},"fontSize":"small"} /-->

<!-- wp:group {"className":"entry-meta","style":{"spacing":{"blockGap":"6px"},"typography":{"fontSize":"12px"},"elements":{"link":{"color":{"text":"var:preset|color|body-text"},":hover":{"color":{"text":"var:preset|color|body-text"}}}}},"textColor":"body-text","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group entry-meta has-body-text-color has-text-color has-link-color" style="font-size:12px"><!-- wp:paragraph -->
<p>by</p>
<!-- /wp:paragraph -->

<!-- wp:post-author-name {"isLink":true,"style":{"typography":{"textDecoration":"underline"}}} /-->

<!-- wp:post-date /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"content-section","style":{"spacing":{"margin":{"top":"2%"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group content-section" style="margin-top:2%"><!-- wp:group {"className":"section-header","layout":{"type":"default"}} -->
<div class="wp-block-group section-header"><!-- wp:heading {"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"tiny"} -->
<h2 class="wp-block-heading has-tiny-font-size" style="text-transform:uppercase"><a href="#"><?php esc_html_e('Category Name', 'metronewspaper'); ?></a></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:columns {"style":{"spacing":{"margin":{"top":"20px"}}}} -->
<div class="wp-block-columns" style="margin-top:20px"><!-- wp:column {"width":"66.6%"} -->
<div class="wp-block-column" style="flex-basis:66.6%"><!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:query {"queryId":19,"query":{"perPage":2,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false,"taxQuery":null,"parents":[]}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":2}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9","height":"","style":{"spacing":{"margin":{"bottom":"10px"}}}} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:post-terms {"term":"category","style":{"typography":{"fontSize":"10px","textTransform":"uppercase","fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|vivid-red"},":hover":{"color":{"text":"var:preset|color|body-text"}}}}}} /-->

<!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"top":"5px"}}},"fontSize":"big"} /-->

<!-- wp:post-excerpt {"showMoreOnNewLine":false,"excerptLength":20,"style":{"spacing":{"margin":{"top":"15px"}}},"fontSize":"extra-small"} /-->

<!-- wp:group {"className":"entry-meta","style":{"spacing":{"blockGap":"6px"},"typography":{"fontSize":"12px"},"elements":{"link":{"color":{"text":"var:preset|color|body-text"},":hover":{"color":{"text":"var:preset|color|body-text"}}}}},"textColor":"body-text","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group entry-meta has-body-text-color has-text-color has-link-color" style="font-size:12px"><!-- wp:paragraph -->
<p>by</p>
<!-- /wp:paragraph -->

<!-- wp:post-author-name {"isLink":true,"style":{"typography":{"textDecoration":"underline"}}} /-->

<!-- wp:post-date /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":""} -->
<div class="wp-block-column"><!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:query {"queryId":22,"query":{"perPage":3,"pages":0,"offset":"2","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"className":"post-list"} -->
<div class="wp-block-query post-list"><!-- wp:post-template {"layout":{"type":"default"}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","width":"150px","height":"","align":"left","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} /-->

<!-- wp:post-terms {"term":"category","style":{"typography":{"fontSize":"10px","textTransform":"uppercase","fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|vivid-red"},":hover":{"color":{"text":"var:preset|color|body-text"}}}}}} /-->

<!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"top":"5px","bottom":"0px"}}},"fontSize":"small"} /-->

<!-- wp:group {"className":"entry-meta","style":{"spacing":{"blockGap":"6px"},"typography":{"fontSize":"12px"},"elements":{"link":{"color":{"text":"var:preset|color|body-text"},":hover":{"color":{"text":"var:preset|color|body-text"}}}}},"textColor":"body-text","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group entry-meta has-body-text-color has-text-color has-link-color" style="font-size:12px"><!-- wp:paragraph -->
<p>by</p>
<!-- /wp:paragraph -->

<!-- wp:post-author-name {"isLink":true,"style":{"typography":{"textDecoration":"underline"}}} /-->

<!-- wp:post-date /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"content-section content-4-col","style":{"spacing":{"margin":{"top":"2%"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group content-section content-4-col" style="margin-top:2%"><!-- wp:group {"className":"section-header","layout":{"type":"default"}} -->
<div class="wp-block-group section-header"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:heading {"style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}},"typography":{"textTransform":"uppercase"}},"fontSize":"tiny"} -->
<h2 class="wp-block-heading has-tiny-font-size" style="margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px;text-transform:uppercase"><a href="#"><?php esc_html_e('Category Name', 'metronewspaper'); ?></a></h2>
<!-- /wp:heading --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:query {"queryId":13,"query":{"perPage":4,"pages":0,"offset":"","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false,"taxQuery":null},"className":"featured-left"} -->
<div class="wp-block-query featured-left"><!-- wp:post-template {"layout":{"type":"grid","columnCount":4}} -->
<!-- wp:post-featured-image {"aspectRatio":"16/9","style":{"spacing":{"margin":{"bottom":"10px"}}}} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:post-terms {"term":"category","style":{"typography":{"fontSize":"10px","textTransform":"uppercase","fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|vivid-red"},":hover":{"color":{"text":"var:preset|color|body-text"}}}}}} /-->

<!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"top":"10px"}}},"fontSize":"big"} /-->

<!-- wp:group {"className":"entry-meta","style":{"spacing":{"blockGap":"6px"},"typography":{"fontSize":"12px"},"elements":{"link":{"color":{"text":"var:preset|color|body-text"},":hover":{"color":{"text":"var:preset|color|body-text"}}}}},"textColor":"body-text","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group entry-meta has-body-text-color has-text-color has-link-color" style="font-size:12px"><!-- wp:paragraph -->
<p>by</p>
<!-- /wp:paragraph -->

<!-- wp:post-author-name {"isLink":true,"style":{"typography":{"textDecoration":"underline"}}} /-->

<!-- wp:post-date /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0px","margin":{"top":"18px"},"padding":{"top":"18px"}},"border":{"top":{"color":"var:preset|color|background-secondary","width":"1px"},"right":[],"bottom":[],"left":[]}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--background-secondary);border-top-width:1px;margin-top:18px;padding-top:18px"><!-- wp:query {"queryId":13,"query":{"perPage":4,"pages":0,"offset":"4","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false,"taxQuery":null},"className":"featured-left"} -->
<div class="wp-block-query featured-left"><!-- wp:post-template {"layout":{"type":"grid","columnCount":4}} -->
<!-- wp:group {"style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:post-terms {"term":"category","style":{"typography":{"fontSize":"10px","textTransform":"uppercase","fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|vivid-red"},":hover":{"color":{"text":"var:preset|color|body-text"}}}}}} /-->

<!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"top":"10px"}}},"fontSize":"medium"} /-->

<!-- wp:group {"className":"entry-meta","style":{"spacing":{"blockGap":"6px"},"typography":{"fontSize":"12px"},"elements":{"link":{"color":{"text":"var:preset|color|body-text"},":hover":{"color":{"text":"var:preset|color|body-text"}}}}},"textColor":"body-text","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group entry-meta has-body-text-color has-text-color has-link-color" style="font-size:12px"><!-- wp:paragraph -->
<p>by</p>
<!-- /wp:paragraph -->

<!-- wp:post-author-name {"isLink":true,"style":{"typography":{"textDecoration":"underline"}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
