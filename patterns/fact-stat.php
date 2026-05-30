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
  <!-- wp:heading {"level":2,"placeholder":"Heading","textAlign":"center","lock":{"move":false,"remove":false}} -->
  <h2 class="has-text-align-center"></h2>
  <!-- /wp:heading -->

  <!-- wp:group {"layout":{"type":"constrained"},"style":{"spacing":{"padding":{"top":"0.25rem","bottom":"0.25rem"}},"dimensions":{"minHeight":"2px"}},"lock":{"move":false,"remove":false}} -->
  <div class="wp-block-group" style="min-height:2px">
    <!-- wp:group {"style":{"dimensions":{"minHeight":"2px","width":"67%"},"color":{"background":"#3e173d"}},"layout":{"type":"constrained"},"lock":{"move":false,"remove":false}} -->
    <div class="wp-block-group has-background" style="background-color:#3e173d;min-height:2px;width:67%">
      <!-- wp:group {"style":{"dimensions":{"minHeight":"4px","width":"33%"},"color":{"background":"#6b2e6a"}},"layout":{"type":"constrained"},"lock":{"move":false,"remove":false}} -->
      <div class="wp-block-group has-background" style="background-color:#6b2e6a;min-height:4px;width:33%"></div>
      <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
  </div>
  <!-- /wp:group -->

  <!-- wp:paragraph {"fontSize":"sm","placeholder":"Subheading","textAlign":"center","lock":{"move":false,"remove":false}} -->
  <p class="has-sm-font-size has-text-align-center"></p>
  <!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
