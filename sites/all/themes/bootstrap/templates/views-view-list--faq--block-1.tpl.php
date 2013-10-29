<?php print $wrapper_prefix; ?>
  <ul class="faq-listing">
    <?php foreach ($rows as $id => $row): ?>
      <li><?php print $row; ?></li>
    <?php endforeach; ?>
  </ul>
<?php print $wrapper_suffix; ?>