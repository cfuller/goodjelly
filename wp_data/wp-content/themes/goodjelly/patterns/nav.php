<?php
/**
 * Title: Navigation
 * Slug: goodjelly/nav
 * Categories: navigation
 * Block Types: core/template-part/navigation
 *
 * @package WordPress
 * @subpackage Goodjelly
 */
?>

<!-- wp:group {"className":"nav-wrapper","layout":{"type":"constrained"}} -->
<div class="wp-block-group nav-wrapper" id="nav-wrapper">
  <!-- wp:group {"className":"topnav","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
  <div class="wp-block-group topnav" id="topnav">
    <!-- wp:html -->
    <button class="navburger" id="navburger">
      <div class="navburger-box">
        <div class="navburger-inner"></div>
      </div>
    </button>
    <!-- /wp:html -->

    <!-- wp:group {"className":"logo","layout":{"type":"constrained"}} -->
    <div class="wp-block-group logo">
      <!-- wp:image {"sizeSlug":"full","linkDestination":"custom"} -->
      <figure class="wp-block-image size-full"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/goodjelly-logo.webp' ) ); ?>" alt="Goodjelly Logo"/></a></figure>
      <!-- /wp:image -->
    </div>
    <!-- /wp:group -->

    <!-- wp:navigation {"overlayMenu":"mobile","layout":{"type":"flex","orientation":"horizontal"}} -->
    <!-- wp:navigation-link {"label":"Read the Blog","url":"/blog","className":"topnav-link"} /-->
    <!-- wp:navigation-link {"label":"Jam Success Stories","url":"#","className":"topnav-link"} /-->
    <!-- wp:navigation-link {"label":"About Us","url":"/about-us","className":"topnav-link"} /-->
    <!-- wp:navigation-link {"label":"Get in Touch","url":"/get-in-touch","className":"topnav-link"} /-->
    <!-- /wp:navigation -->

    <!-- wp:buttons -->
    <div class="wp-block-buttons">
      <!-- wp:button {"className":"header-button"} -->
      <div class="wp-block-button header-button"><a class="wp-block-button__link wp-element-button">Learn how to Jam</a></div>
      <!-- /wp:button -->
    </div>
    <!-- /wp:buttons -->
  </div>
  <!-- /wp:group -->
</div>
<!-- /wp:group -->