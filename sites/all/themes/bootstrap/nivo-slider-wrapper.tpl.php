<?php

/**
 * @file
 * Default theme implementation for displaying a banner.
 *
 * A banner wraps slides in HTML, which provides an anchor for the Nivo Slider
 * to target and create a slideshow with the appropriate settings and theming.
 *
 * Available variables:
 * - $theme: String containing the name of the currently active theme.
 * - $banners: String of HTML representing a banner.
 * - $html_captions: String of HTML representing any HTML captions.
 *
 * @see template_preprocess()
 * @see template_process()
 */
?>
<?php if ($banners): ?>
  <div class="slider-wrapper theme-<?php print $theme; ?>">
    <div id="slider" class="nivoSlider">
      <?php print $banners; ?>
        <?php if ($html_captions): ?>
        <div class="banner-caption">
        <?php print $html_captions; ?>
        </div>
        <?php endif; ?>
    </div>
  </div>
<?php endif; ?>