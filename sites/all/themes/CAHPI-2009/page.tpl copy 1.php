<?php
// $Id: page.tpl.php,v 1.18 2008/01/24 09:42:53 goba Exp $
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">
  <head>
    <title><?php print $head_title ?></title>
    <?php print $head ?>
    <?php print $styles ?>
    <?php print $scripts ?>
    <script type="text/javascript" src="<?php print base_path() . $directory;?>/js/swfobject.js"></script>
    <script type="text/javascript" src="<?php print base_path() . $directory;?>/js/jquery-1.3.2"></script>
    <script type="text/javascript">
    $(document).ready(function() {

      $("#main_menu li.leaf").hover(function(){$(this).fadeOut(1);$(this).fadeIn(600);});

    });
    </script>
    <!--[if lte IE 7]>
      <?php print phptemplate_get_ie_styles(); ?>
    <![endif]-->
  </head>
  <body>
  <div id="wrapper">
    <?php if($logged_in) {?>
    <div id="admin_navigation" ><?php print $admin_nav; ?></div>
    <?php } ?>
    <div id="container">
     <div id="header">
       <h1>Atlantic Canadian Association of Home & Property Inspectors</h1>
       <div id="top_menu"><?php print theme('links', $primary_links, array('class' => 'links primary-links')) ?></div>
       <div id="main_menu"><?php print $mainmenu; ?></div>
       <?php if(isset($submenu)){ print '<div id="sub_menu">' . $submenu . '</div>';} ?>
     </div>
     <?php if($is_front) { ?>
     <div id="front_banner">
     <div id="flash"></div>
       <script type="text/javascript">
         var so = new SWFObject("<?php print base_path() . $directory;?>/flash/front.swf", "homepage", "574", "248", "8", "#000000");
         so.write("flash");
       </script>   
     </div>
     <div id="right_bar"><a href="/node/5"><img src="/<?php print $directory ?>/images/map_home_3.png" alt="map_home" width="283" height="294" border="0"/></a></div>
     <div id="content_left">
       <div id="content_center_top"></div>
       <div id="main_content"><h2><?php print $title; ?></h2>
       <?php print $content; ?>
       </div>
       <div id="content_center_bottom"></div>
     </div>
     <div id="content_right">
       <div id="content_right_top"></div>
       <div id="main_content_right">
         <?php print $homeContentRight; ?>
       </div>
       <div id="content_right_bottom"></div>
     </div>

  <?php } else {?>
  
    <div id="content_wrapper">
      <div id="internal_content_top"></div>
      <div id="content<?php $node->type=='map'?print '_map' :'';?>">
        <?php if($logged_in) {?>
        <div id="navigation" ><?php print $extranet_menu; ?></div>
        <?php } ?>
        <h2><?php print $title; ?></h2>
        <?php if ($show_messages && $messages) print $messages; ?>
          <?php if ($tabs) {print '<div id="tabs-wrapper" class="clear-block">';}?>
          <?php if ($tabs) {print '<ul class="tabs primary">'. $tabs .'</ul></div>'; } ?>
          <?php if ($tabs2){print '<ul class="tabs secondary">'. $tabs2 .'</ul>';}?>
        <?php print $content; ?>
      </div>
      <div id="internal_content_bottom"></div>
    </div>   
  <?php } ?>
      <div id="footer"><span style="float:left; padding: 5px 0px 0px 10px;font-size:10px;"><a href="mailto:info@cahpi-atl.com">info@cahpi-atl.com</a></span><span style="float:right; padding: 5px 10px 0px 0px;font-size:10px;"> &copy; 2009 CAHPI</span></div>
     </div>
   </div>
  <?php print $closure ?>
  </body>
</html>
