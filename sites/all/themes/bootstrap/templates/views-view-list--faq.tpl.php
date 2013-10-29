<?php print $wrapper_prefix; ?>
  <ul id="carousel-1">
    <?php foreach ($rows as $id => $row): ?>
      <li><?php print $row; ?></li>
    <?php endforeach; ?>
  </ul>
 <div class="clear"></div>
 <a id="prev-1"  href="javascript:;"></a> <a id="next-1"  href="javascript:;"></a> 
<?php print $wrapper_suffix; ?>