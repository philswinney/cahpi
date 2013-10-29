<?php $themePath = drupal_get_path('theme','bootstrap');?>
<!DOCTYPE html>
<html lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"<?php print $rdf_namespaces;?>>
<head profile="<?php print $grddl_profile; ?>">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>
  <!-- HTML5 element support for IE6-8 -->
  <!--[if lt IE 9]>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <link rel="stylesheet" href="/<?php echo $themePath;?>/css/ie-style.css">
    <link rel="stylesheet" href="/<?php echo $themePath;?>/css/bootstrap-ie8buttonfix.css">
  <![endif]-->
  <?php print $scripts; ?>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,600,700,300' rel='stylesheet' type='text/css'>
  		<script type="text/javascript">
			   (function($){
			    $(window).load(function(){
			    
			    $('.sf-menu').superfish();

            	jQuery('.sf-menu').mobileMenu();	 
            	jQuery('.sf-menu >li:nth-child(1) ').addClass("item-1");
            	jQuery('.sf-menu >li:nth-child(2) ').addClass("item-2");
            	jQuery('.sf-menu >li:nth-child(3) ').addClass("item-3");
                jQuery('.sf-menu >li:nth-child(4) ').addClass("item-4");
            	jQuery('.sf-menu >li:nth-child(5) ').addClass("item-5");  
            	 jQuery('.sf-menu > li > a').prepend('<span></span>');
            	jQuery('.sf-menu > li').prepend('<em></em>');	  

				$('.line-wrapper .line-after').each(function() {
				var thiswidth = ($(this).parent().width() - $(this).prev().width()) / 2 - 28;
				$(this).css({width:thiswidth})})
				$('.line-wrapper .line-before').each(function() {
				var thiswidth = ($(this).parent().width() - $(this).next().width()) / 2 - 28;
				$(this).css({width:thiswidth})})
				
								
			});
			
			$(window).resize(function(){
				$('.line-wrapper .line-after').each(function() {
				var thiswidth = ($(this).parent().width() - $(this).prev().width()) / 2 - 28;
				$(this).css({width:thiswidth})})
				$('.line-wrapper .line-before').each(function() {
				var thiswidth = ($(this).parent().width() - $(this).next().width()) / 2 - 28;
				$(this).css({width:thiswidth})})
			});
			
          })(jQuery);			
		</script>
</head>
<body>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
</body>
</html>
