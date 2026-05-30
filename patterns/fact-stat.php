<?php
/**
 * Title: Fact Stat
 * Slug: cge-theme/fact-stat
 * Categories: text
 * Description: A fact stat with a heading, separator bar, and subheading.
 */
?>
<!-- wp:group {"layout":{"type":"constrained"},"style":{"spacing":{"blockGap":"0.75rem"}},"lock":{"move":false,"remove":false}} -->
<div class="wp-block-group" style="text-align:center">
  <!-- wp:heading {"level":2,"placeholder":"Heading"} -->
  <h2></h2>
  <!-- /wp:heading -->

  <!-- wp:group {"layout":{"type":"constrained"},"style":{"spacing":{"padding":{"top":"0.25rem","bottom":"0.25rem"}}},"lock":{"move":false,"remove":false}} -->
  <div class="wp-block-group">
    <!-- wp:group {"layout":{"type":"flex","justifyContent":"center"},"style":{"dimensions":{"height":"1rem"}},"lock":{"move":false,"remove":false}} -->
    <div class="wp-block-group">
      <!-- wp:group {"style":{"dimensions":{"height":"1rem","width":"67%"},"color":{"background":"#3e173d"}},"layout":{"type":"constrained"},"lock":{"move":false,"remove":false}} -->
      <div class="wp-block-group has-background" style="background-color:#3e173d;height:1rem;width:67%">
        <!-- wp:group {"style":{"dimensions":{"height":"2rem","width":"33%"},"color":{"background":"#6b2e6a"}},"layout":{"type":"flex","justifyContent":"center"},"lock":{"move":false,"remove":false}} -->
        <div class="wp-block-group has-background" style="background-color:#6b2e6a;height:2rem;width:33%"></div>
        <!-- /wp:group -->
      </div>
      <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
  </div>
  <!-- /wp:group -->

  <!-- wp:paragraph {"fontSize":"md","placeholder":"Subheading"} -->
  <p class="has-md-font-size"></p>
  <!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
