<?php
// $Id: comment.tpl.php 8 2008-09-23 00:25:17Z pwolanin $
?>
  <div class="comment<?php print ' '. $status; ?>">
    <?php if ($picture) {
    print $picture;
  } ?>
<h3 class="title"><?php print $title; ?></h3><?php if ($new != '') { ?><span class="new"><?php print $new; ?></span><?php } ?>
    <div class="submitted"><?php print $submitted; ?></div>
    <div class="content">
     <?php print $content; ?>
     <?php if ($signature): ?>
      <div class="clear-block">
       <div>—</div>
       <?php print $signature ?>
      </div>
     <?php endif; ?>
    </div>
    <div class="links"><?php print $links; ?></div>
  </div>
