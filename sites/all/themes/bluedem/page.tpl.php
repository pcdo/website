<?php
// $Id: page.tpl.php 8 2008-09-23 00:25:17Z pwolanin $
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language->language ?>" xml:lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">

<head>
  <title><?php print $head_title ?></title>
  <?php print $head ?>
  <?php print $styles ?>
  <?php print $scripts ?>
  <script type="text/javascript"><?php /* Needed to avoid Flash of Unstyle Content in IE */ ?> </script>
  
  
  <link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>

<table width="100%" border="0" cellpadding="0" cellspacing="0" id="header" >
  <tr>
    <td width="70%"id="left-banner"><?php if ($logo) { ?>
      <a href="<?php print $front_page ?>" title="<?php print t('Home') ?>"><img src="<?php print $logo ?>" alt="<?php print t('Home') ?>" /></a>
      <?php } ?><?php if ($site_name) { ?>
      <h1 class='site-name'><a href="<?php print $front_page ?>" title="<?php print t('Home') ?>"><?php print $site_name ?></a></h1><?php } ?>    </td>
    
     <td  width="30%" id="right-banner" valign="bottom" >
    <div id="login"><?php print $header ?></a></div>  	</td>
  </tr>
</table>
 <div id="contentwrapper">
<table width="100%" cellpadding="2" id="toplinks" border="0">
      <tr>
			<td align="right">
       <?php print theme('links', $primary_links, array('class' => 'menu', 'id' => 'primary_links')) ?> </td> 
  </tr>
</table>


<table border="0" cellpadding="0" cellspacing="0" id="content">

    <?php if ($left) { ?><td id="sidebar-left">
      <?php print $left ?>
    </td><?php } ?>
    <td valign="top">
      <?php if ($mission) { ?><div id="mission"><?php print $mission ?></div><?php } ?>
      <div id="main">
	  <?php if ($right) { ?><div id="sidebar-right">
      <?php print $right ?>
    </div><?php } ?>
       <h1 class="title"><?php print $title ?></h1>
        <div class="tabs"><?php print $tabs ?></div>
        <?php if ($show_messages) { print $messages; } ?>
        <?php print $help ?>
        <?php print $content; ?>
        
      </div>
    
    
  </tr>
</table>

</div>
<!--<div id="footer" align="center">


</div>-->


<?php print $closure ?>
</body>
</html>

