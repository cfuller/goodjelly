<?php
/**
 * Title: Home Section 1
 * Slug: goodjelly/home-section-1
 * Categories: goodjelly
 * Block Types: core/group
 *
 * @package WordPress
 * @subpackage Goodjelly
 */
?>

<!-- wp:group {"className":"home-green home-1","layout":{"type":"constrained"}} -->
<div class="wp-block-group home-green home-1">
    <!-- wp:heading {"textAlign":"center","className":"vspace-2"} -->
    <h2 class="wp-block-heading has-text-align-center vspace-2">Your creative future has two paths.<br>It's important to know how to stay on one—and off the other.</h2>
    <!-- /wp:heading -->

    <!-- wp:group {"className":"center vspace-2","layout":{"type":"constrained"}} -->
    <div class="wp-block-group center vspace-2">
        <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
        <div class="wp-block-buttons">
            <!-- wp:button -->
            <div class="wp-block-button"><a class="wp-block-button__link wp-element-button">Watch Christine Explain...</a></div>
            <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"className":"center","layout":{"type":"constrained"}} -->
    <div class="wp-block-group center">
        <!-- wp:image {"align":"center","sizeSlug":"large","className":"path-diagram vspace-2"} -->
        <figure class="wp-block-image aligncenter size-large path-diagram vspace-2"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/confidence-diagram.png' ) ); ?>" alt="Creative Confidence Paths"/></figure>
        <!-- /wp:image -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"className":"center mw-750","layout":{"type":"constrained"}} -->
    <div class="wp-block-group center mw-750">
        <!-- wp:paragraph -->
        <p>Right now, your creative confidence is either on the Purple Line—<br>rising toward Delight. (I've got this!)</p>
        <!-- /wp:paragraph -->

        <!-- wp:paragraph -->
        <p>Or it's on the Red Line—<br>sliding into Despair. (Do I even have what it takes?)</p>
        <!-- /wp:paragraph -->

        <!-- wp:paragraph -->
        <p>At first, the gap between the two lines might not seem that big.<br>But over time?<br>That gap widens.</p>
        <!-- /wp:paragraph -->

        <!-- wp:paragraph -->
        <p>And if you're drifting down the Red Line,<br>it gets harder and harder<br>to make the progress you want to make.</p>
        <!-- /wp:paragraph -->

        <!-- wp:paragraph -->
        <p>The Jam Method, along with the full Jam Toolkit, will put you<br>on Purple Line and help you stay there.</p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->