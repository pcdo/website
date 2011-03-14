
<div class="report">

<div class="node<?php print ($sticky) ? " sticky" : ""; ?>">
 
  <?php if ($page == 0): ?>
   
  <?php endif; ?>
<div class="minutestitle"> <a href="<?php print $node_url ?>" title="<?php print $title ?>"><?php print $title ?></a></div>
  
  <div class="content">
  <?php print $content ?>
  </div>
  
 <?php if ($links): ?>
    <?php if ($picture): ?>
      <br class='clear' />
    <?php endif; ?>
<div class="info"><?php print $submitted ?></div>
  <div class="links"><?php print $links ?></div>
<?php endif; ?>


 </div>

</div>