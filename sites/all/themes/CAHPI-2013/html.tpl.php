<!DOCTYPE html>
<html lang="<?php print $language->language; ?>">
		<head>
            <?php print $head; ?>
            <title><?php print $head_title; ?></title>
            <?php print $styles; ?>
            <?php print $scripts; ?>
		<script type="text/javascript">
			   (function($){
			    $(window).load(function(){
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
          })(jQuery);			
		</script>

		<!--[if lt IE 8]>
  		<div style='text-align:center'><a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/img/upgrade.jpg"border="0"alt=""/></a></div>  
 	<![endif]-->
		<!--[if (gt IE 9)|!(IE)]><!-->
		<!--<![endif]-->
		<!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">  
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:800' rel='stylesheet' type='text/css'>
  <![endif]-->
</head>
<body>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
</body>
</html>