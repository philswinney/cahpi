<?php $themePath =  drupal_get_path('theme','bootstrap');?>
<!DOCTYPE html>
<html lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"<?php print $rdf_namespaces;?>>
<head profile="<?php print $grddl_profile; ?>">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>
  <link type="text/css" rel="stylesheet" href="/<?php echo $themePath;?>/css/jquery.bxslider.css"/>
  <!-- HTML5 element support for IE6-8 -->
  <!--[if lt IE 9]>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <link rel="stylesheet" href="/<?php echo $themePath;?>/css/ie-style.css">
    <link rel="stylesheet" href="/<?php echo $themePath;?>/css/bootstrap-ie8buttonfix.css">
  <![endif]-->
  <?php print $scripts; ?>
  <script src="/<?php echo $themePath;?>/js/jquery.bxslider.min.js" type="text/javascript"></script>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,600,700,300' rel='stylesheet' type='text/css'>
  		<script type="text/javascript">
  		
			   (function($){
			    $(window).load(function(){
			    
			    $('.sf-menu').superfish();
			    $('.bxslider').bxSlider({controls:false,auto:true, autoHover:true});

            	$('.sf-menu').mobileMenu();	 
            	$('.sf-menu >li:nth-child(1) ').addClass("item-1");
            	$('.sf-menu >li:nth-child(2) ').addClass("item-2");
            	$('.sf-menu >li:nth-child(3) ').addClass("item-3");
                $('.sf-menu >li:nth-child(4) ').addClass("item-4");
            	$('.sf-menu >li:nth-child(5) ').addClass("item-5");  
            	 $('.sf-menu > li > a').prepend('<span></span>');
            	$('.sf-menu > li').prepend('<em></em>');	  

				$('.line-wrapper .line-after').each(function() {
				var thiswidth = ($(this).parent().width() - $(this).prev().width()) / 2 - 28;
				$(this).css({width:thiswidth})})
				
				$('.line-wrapper .line-before').each(function() {
				var thiswidth = ($(this).parent().width() - $(this).next().width()) / 2 - 28;
				$(this).css({width:thiswidth})})
			    
				//	Responsive layout, resizing the items
				$('#carousel').carouFredSel({
					auto: false,
					responsive: true,
					width: '100%',		
					scroll: 1,
				    prev: '#prev',
					next: '#next',
					pagination: false,
					mousewheel: false,
					swipe: {
						onMouse: true,
						onTouch: true
					},
					items: {
					  width:320,
					  height: 'auto',	//	optionally resize item-height
						visible: {
							min: 1,
							max: 4
						}
					}
				});
				
					//	Responsive layout, resizing the items
				$('#carousel-1').carouFredSel({
					auto: false,
					responsive: true,
					width: '100%',
					scroll: 1,
				    prev: '#prev-1',
					next: '#next-1',
					pagination: false,
					mousewheel: false,
					swipe: {
						onMouse: true,
						onTouch: true
					},
					items: {
					  width:380,
					  height: 'auto',	//	optionally resize item-height
						visible: {
							min: 1,
							max: 4
						}
					}
				});
								
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
