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
<?php if(!empty($page['banner'])):?>
<div class="row-top">
      <div class="container"> 
            <div class="row row-none">
                <?php print render($page['banner']);?>
            </div>
     </div>
</div>  
<?php endif;?>
<!--============================== content =================================-->

<div id="content">
  <div class="container">
    <div class="row policy">
      <article class="span4 pull-right">
        <?php if (!empty($page['sidebar_first'])): ?>
          <aside class="span3" role="complementary">
            <?php print render($page['sidebar_first']); ?>
          </aside>  <!-- /#sidebar-first -->
        <?php endif; ?>        
      </article>
      <article class="span8">
      <?php if (!empty($title)): ?>
        <div class="line-wrapper">
          <div class="line-before"></div>
          <h3 class="page-title"><?php print $title; ?></h3>
          <div class="line-after"></div>
        </div>
         <?php endif; ?>          
      <?php if (!empty($page['highlighted'])): ?>
        <div class="highlighted hero-unit"><?php print render($page['highlighted']); ?></div>
      <?php endif; ?>
      <?php print $messages; ?>
      <?php if (!empty($tabs)): ?>
       <?php print render($tabs); ?>
       <?php endif; ?>
       <?php if (!empty($page['help'])): ?>
        <div class="well"><?php print render($page['help']); ?></div>
      <?php endif; ?>
      <?php if (!empty($action_links)): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
      <?php print render($page['content']); ?>
      </article>
    </div>
  </div>
</div>
<!--============================== footer =================================-->
<footer>
          <div class="container">
                <div class="privacy">CAHPI &copy;<?php echo date('Y');?>&nbsp; 
                <?php print render($page['footer']); ?></div>
          </div>
</footer>
