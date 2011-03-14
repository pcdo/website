<div class="comment<?php print ($comment->new) ? ' comment-new' : ''; print ($comment->status == COMMENT_NOT_PUBLISHED) ? ' comment-unpublished' : ''; print ' '. $zebra; ?>">

  <div class="clear-block" >
  <?php if ($submitted): ?>
    <span class="submitted"><?php print t('Comment by !username on !date', array('!username' => theme('username', $comment), '!date' => format_date($comment->timestamp))); ?></span>
  <?php endif; ?>

  <?php if ($comment->new) : ?>
    <a id="new"></a>
    <span class="new"><?php print drupal_ucfirst($new) ?></span>
  <?php endif; ?>

 

  <!-- jlc took out print title because disable didn't work-->
    <div class="content">
      <?php print $content ?>
    </div>

  </div>

  <?php if ($links): ?>
    <div class="links"><?php print $links ?></div>
  <?php endif; ?>
</div>
