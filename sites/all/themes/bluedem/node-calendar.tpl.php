<?php
// $Id: node-calendar.tpl.php 9 2008-09-23 00:26:12Z pwolanin $
?>
  <div class="node<?php if ($sticky) { print " sticky"; } ?><?php if (!$status) { print " node-unpublished"; } ?>">
    <?php if ($picture) {
      print $picture;
    }?>
    <?php if ($page == 0) { ?><h2 class="title"><a href="<?php print $node_url?>"><?php print $title?></a></h2><?php }; ?>
    <span class="submitted"><?php print $submitted?></span>
    <div class="content"><?php print $content?></div>
    <div class="taxonomy"><?php if ($terms && $teaser) { echo 'Category: '. $terms; } ?></div>
    <?php if ($links) { ?><div class="links">&raquo; <?php print $links?></div><?php }; ?>
  </div>
