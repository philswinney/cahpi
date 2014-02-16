<!--============================== header =================================-->
  <?php print render($page['header']); 
      $themePath = drupal_get_path('theme','bootstrap');
  ?>
<header>
 <div class="container clearfix">
    <div class="navbar navbar_">
        <div class="container">
           <?php 
                if ($logged_in) {
                   print render($page['task_menu']);
                } else {
                   print render($secondary_nav); 
                }
           ?>
            <h1 class="brand brand_"><a href="/"><img alt="CAHPI" src="/<?php echo $themePath;?>/img/logo.png"> </a></h1>
            <div class="nav-collapse nav-collapse_  collapse">
                       <?php if ($primary_nav): print render($primary_nav); endif; ?>
           </div>
       </div>
    </div>
  </div>
</header>
<div class="row-top">
      <div class="container"> 
            <div class="line-wrapper">
                <div class="line-before"></div>
                <h3 class="banner-title">THINGS YOU NEED TO KNOW</h3>
                <div class="line-after"></div>
             </div>
            <div class="row row-none">
               <ul class="bxslider">
                  <li><img src="/sites/default/files/banner/cam_roof_damage2.png">
                        <div id="bx-banner">
                            <h3>Roof Damage</h3>
                            <p>Leakage from damaged shingles</p>
                        </div>
                  </li>
                  <li><img src="/sites/default/files/banner/cam_poor_ventilation.png">
                        <div id="bx-banner">
                            <h3>Poor Ventilation</h3>
                            <p>"Over-sealed" homes with excessive interior moisture</p>
                        </div>
                  </li>
                  <li><img src="/sites/default/files/banner/cam_decking.png">
                        <div id="bx-banner">
                            <h3>Surface Drainage</h3>
                            <p>Poor grading and drainage causing water penetration</p>
                        </div>
                  </li>
               </ul>
            </div>
     </div>
</div>  
<!--============================== content =================================-->
<div id="content" class="content-extra">
    <div class="shadow"></div>
     <div class="container"> 
        <div class="line-wrapper extra">
              <div class="line-before"></div>
              <h3>FIND A CAHPI INSPECTOR</h3>
              <div class="line-after"></div>
        </div>
        <ul class="list-header thumbnails">
            <li class="span3">
                      <div class="thumbnail thumbnail-1">
                            <figure class=""><img src="<?php echo $themePath;?>/img/nsmap.png " alt="" /><img class="active" src="<?php echo $themePath;?>/img/nsmap_hover.png " alt="" /></figure>
                            <strong>NOVA SCOTIA</strong>
                            <a href="/inspectors/nova-scotia" class="btn btn-1 listheaderbtn">Find an Inspector</a> 
                        </div>
            </li>
            <li class="span3">
                  <div class="thumbnail thumbnail-1">
                        <figure class=""><img src="<?php echo $themePath;?>/img/nbmap.png " alt="" /><img class="active" src="<?php echo $themePath;?>/img/nbmap_hover.png " alt="" /></figure>
                        <strong>NEW BRUNSWICK</strong>
                        <a href="/inspectors/new-brunswick" class="btn btn-1 listheaderbtn">Find an Inspector</a> 
                </div>
            </li>
            <li class="span3">
                 <div class="thumbnail thumbnail-1">
                        <figure class=""><img src="<?php echo $themePath;?>/img/peimap.png " alt="" /><img class="active" src="<?php echo $themePath;?>/img/peimap_hover.png " alt="" /></figure>
                        <strong>PRINCE EDWARD ISLAND</strong>
                        <a href="/inspectors/prince-edward-island" class="btn btn-1 listheaderbtn2">Find an Inspector</a> 
                </div>
            </li>
            <li class="span3">
                      <div class="thumbnail thumbnail-1">
                            <figure class=""><img src="<?php echo $themePath;?>/img/nfldmap.png " alt="" /><img class="active" src="<?php echo $themePath;?>/img/nfldmap_hover.png " alt="" /></figure>
                            <strong>NEWFOUNDLAND & LABRADOR</strong>
                            <a href="/inspectors/newfoundland-labrador" class="btn btn-1 listheaderbtn3">Find an Inspector</a> 
                     </div>
            </li>
        </ul>
        <div class="clear"></div>
  </div>
</div>

<div class="row-1">
    <div class="container">
        <div class="line-wrapper extra">
            <div class="line-before"></div>
            <h3>Frequently Asked Questions</h3>
            <div class="line-after"></div>
        </div>
            <?php print render($page['faqs']); ?>
    </div>
    <div class="shadow-1"></div>
</div>

<!--============================== footer =================================-->
<footer>
          <div class="container">
                <div class="privacy">CAHPI &copy;<?php echo date('Y');?>&nbsp; 
                <?php print render($page['footer']); ?></div>
          </div>
</footer>
