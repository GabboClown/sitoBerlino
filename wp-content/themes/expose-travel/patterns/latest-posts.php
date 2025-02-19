<?php
/**
 * Title: Latest Posts
 * Slug: expose-travel/latest-posts
 * Categories: theme
 *
 * @package expose-travel
 * @since 1.0.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|70","padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","right":"var:preset|spacing|30","left":"var:preset|spacing|30"}}},"backgroundColor":"alter","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-alter-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--30)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:separator {"style":{"layout":{"selfStretch":"fixed","flexSize":"50px"}},"backgroundColor":"secondary"} -->
<hr class="wp-block-separator has-text-color has-secondary-color has-alpha-channel-opacity has-secondary-background-color has-background"/>
<!-- /wp:separator -->

<!-- wp:heading {"level":6,"style":{"typography":{"fontStyle":"normal","fontWeight":"400"},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary","fontSize":"extra-small","fontFamily":"palanquin-dark"} -->
<h6 class="wp-block-heading has-secondary-color has-text-color has-link-color has-palanquin-dark-font-family has-extra-small-font-size" style="font-style:normal;font-weight:400">RECENT BLOG</h6>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"lineHeight":"1.1","fontStyle":"normal","fontWeight":"500"}},"fontSize":"x-large","fontFamily":"palanquin-dark"} -->
<h3 class="wp-block-heading has-text-align-center has-palanquin-dark-font-family has-x-large-font-size" style="font-style:normal;font-weight:500;line-height:1.1">Amazing News &amp; Blog For<br>Every Single Update</h3>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":42,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"className":"animated animated-fadeInUp"} -->
<div class="wp-block-query animated animated-fadeInUp"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40","padding":{"top":"0","bottom":"0","right":"0","left":"0"}},"border":{"radius":"5px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group" style="border-radius:5px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:post-featured-image {"isLink":true,"width":"","height":"","scale":"contain","style":{"border":{"radius":"10px"}}} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40","padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|30","bottom":"var:preset|spacing|50","left":"var:preset|spacing|30"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--30)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40","margin":{"top":"0","bottom":"var:preset|spacing|30"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--30)"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|30"},"border":{"radius":"5px"}},"backgroundColor":"base","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group has-base-background-color has-background" style="border-radius:5px;padding-top:0;padding-right:var(--wp--preset--spacing--40);padding-bottom:0;padding-left:var(--wp--preset--spacing--40)"><!-- wp:post-author {"textAlign":"left","avatarSize":24,"showAvatar":false,"textColor":"custom-body","fontSize":"extra-small"} /-->

<!-- wp:paragraph {"fontSize":"x-small"} -->
<p class="has-x-small-font-size">·</p>
<!-- /wp:paragraph -->

<!-- wp:post-date {"format":"M j, Y","textColor":"contrast","fontSize":"extra-small"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:post-title {"textAlign":"left","level":5,"isLink":true,"style":{"spacing":{"margin":{"top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|xx-small"},"padding":{"top":"var:preset|spacing|30","bottom":"0"}},"typography":{"lineHeight":"1.2","fontStyle":"normal","fontWeight":"400"},"elements":{"link":{"color":{"text":"var:preset|color|custom-heading"}}}},"textColor":"custom-heading","fontSize":"medium","fontFamily":"palanquin-dark"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"align":"center","placeholder":"Add text or blocks that will display when a query returns no results."} -->
<p class="has-text-align-center"></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->