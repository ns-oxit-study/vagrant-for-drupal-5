<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language ?>" xml:lang="<?php print $language ?>">
<head>
    <!-- vi -->
  <title><?php print $head_title ?></title>
  <meta http-equiv="Content-Style-Type" content="text/css" />
  <?php print $head ?>
  <?php print $styles ?>
  <?php print $scripts ?>
</head>

<body>
<div id="wrapper">
  <div id="topad">
    <?php if ($left_topad): print $left_topad; endif; ?><?php if ($right_topad): print $right_topad; endif; ?>
    </div><?php //end topad ?>

  <div id="topnav">
    <?php if ($topnav): print $topnav; endif; ?>
  </div><?php //end topnav ?>

  <div id="header">
    <div id="portal"><div class="portal_<?php print $portal_class; ?>">
      <?php if ($portal): print $portal; endif; ?>
      <div id="portalnav"><?php if ($portalnav): print $portalnav; endif; ?></div>
      </div>
    </div>
    <div id="logo"><?php
        if ($logo) {
              print '<a href="'.base_path().'" title="HOME"><img src="'. check_url($logo) .'" alt="HOME" id="logo" /></a>';
            } ?>
    </div>
  </div><?php //end header ?>
 <div id="navigation">
  <div class="navigation_bg_<?php print $nav_class; ?>">
    <?php
          if ($oth_nav): print $oth_nav; endif;
     ?>
    </div>
  </div>

  <?php if ($help): print $help; endif; ?>
  <?php if ($messages): print $messages; endif; ?>
  <div id="fpv_main">
    
    <div id="fpv_widebar"><?php // 3 column ?>
      <?php if ($fp_widebar): print $fp_widebar; endif; ?>
    </div>
    <span class="clear"></span>
 <?php // youtube ?>
      <?php if ($content): print $content; endif; ?>
        <div id="fpv_mini"><?php // q and a ?>
      <?php if ($fp_mini): print $fp_mini; endif; ?>
    </div>   

    <div id="fp_lowerblocks"><?php // q and a ?>
      <?php if ($fp_lowerblocks): print $fp_lowerblocks; endif; ?>
    </div>
    <div id="fp_lowerwidebar"><?php // q and a ?>
      <?php if ($fp_lowerwidebar): print $fp_lowerwidebar; endif; ?>
    </div>
</div><?php // end fp main ?>

  <div id="lowad">
    <?php if ($lowad): print $lowad; endif; ?>
  </div>
  <div class="clear"></div>
  <div id="footer">
    <?php if ($footer): print $footer; endif; ?>
    <div class="footermsg"><?php if ($footer_message): print $footer_message; endif; ?></div>
  </div><?php //end footer ?>
</div><?php //end wrapper ?>

<!--  <script language="JavaScript">-->
<!--    GA_googleFetchAds();-->
<!--  </script>-->
  <?php print $closure ?>
</body></html>
