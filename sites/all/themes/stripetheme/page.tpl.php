<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language->language ?>" xml:lang="<?php print $language->language ?>">
<head>
  <title><?php print $head_title ?></title>
     <script type="text/javascript"><?php /* Needed to avoid Flash of Unstyle Content in IE */ ?> </script>
  <?php print $head ?><?php print $styles ?><?php print $scripts ?>
 
  </head>
<body>
  <table width="100%" border="0" cellpadding="0" cellspacing="0" id="topbanner">
    <tr>
      <td width="65%" id="logo">
        <?php if ($logo) { ?><a href="<?php print $base_path ?>" title="<?php print t('Home') ?>"><img src="<?php print $logo ?>" alt="<?php print t('Home') ?>" /></a><?php } ?>
		 <div id="sitename"><?php if ($site_name) { ?><a href="<?php print $base_path ?>" title="<?php print t('Home') ?>"><?php print $site_name ?></a><?php } ?>   </div>
	  </td>
      <td width="35%" align="right" valign="top" id="banner_right"><div id="header"><?php print $header; ?></div>	   
      </td>
    </tr>
    <tr>
      <td colspan="2"></td>
    </tr>
  </table>
   <div id="top_stripe"><div align="right"><?php if (isset($primary_links)) { ?><div id="primary"><?php print theme('links', $primary_links) ?></div><?php } ?> 
   <table width="100%" border="0" cellpadding="0" cellspacing="0" id="content">
    <tr>
      <td valign="top" id="sidebar-left">
	          <?php print $left ?>
	   </td>
       <td valign="top" class="main-content" id="content-both">
      <?php if ($mission) { ?>
      <div id="mission"><?php print $mission ?></div><?php } ?>
        <h2 class="content-title"><?php print $title ?></h2>
        <div class="tabs"><?php print $tabs ?></div>
        <?php print $help ?>
        <?php print $messages ?>
        <?php print $content; ?>
      </td>
      <td valign="top" id="sidebar-right">
         <?php print $right ?>   
	  </td>
   </tr>
</table>
</div>
<div id="footer">
  <?php print $footer_message ?>
</div>
<?php print $closure ?>
</body>
</html>