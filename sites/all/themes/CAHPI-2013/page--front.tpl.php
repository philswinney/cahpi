<!--============================== header =================================-->
  <?php print render($page['header']); 
      $themePath = drupal_get_path('theme','bootstrap');
  ?>
<header>
    <?php if ($primary_nav): print $primary_nav; endif; ?>
 <div class="container clearfix">
    <div class="navbar navbar_">
        <div class="container">
            <h1 class="brand brand_"><a href="index.html"><img alt="iBuild2" src="<?php echo $themePath;?>img/logo.png"> </a></h1>
            <div class="nav-collapse nav-collapse_  collapse">
                <ul class="nav sf-menu">
                    <li class="active"><a href="index.html">Home</a></li>
                    <li><a href="index-1.html">About Us</a>
                      <ul>
                        <li><a href="#">Our Team</a></li>
                        <li><a href="#">Our Mission</a>
                                  <ul>
                                        <li><a href="#">Technology</a></li>
                                        <li><a href="#">Innovation</a></li>
                                        <li><a href="#">Safety</a></li>
                                        <li><a href="#">Results</a></li>
                                        <li><a href="#">High Standards</a></li>
                                  </ul>
                        </li>
                        <li><a href="#">Gallery</a></li>
                        <li><a href="#">FAQs</a></li>
                        <li><a href="#">Archive</a></li>
                      </ul>
                    </li>
                    <li><a href="index-2.html">Products</a></li>
                    <li><a href="index-3.html">Services</a></li>
                    <li><a href="index-4.html">Contacts</a></li>
              </ul>
         </div>
       </div>
    </div>
  </div>
</header>
        
<div class="row-top">
      <div class="container"> 
          <div class="line-wrapper">
              <div class="line-before"></div>
              <h3>Our Capabilities</h3>
              <div class="line-after"></div>
            </div>
    <div class="row">
        <ul class="thumbnails  list-header">
        <li class="span3">
                  <div class="thumbnail thumbnail-1">
            <figure class=""><img src="img/page1-img1.png " alt="" /><img class="active" src="img/page1-img1_hover.png " alt="" /></figure>
            <strong>project 
                    management</strong>
            <p>Our team is highly skilled at 
                      successfully completing 
                      projects.</p>
            <a href="#" class="btn btn-1">More</a> </div>
        </li>
        <li class="span3">
                  <div class="thumbnail thumbnail-1">
            <figure class=""><img src="img/page1-img2.png " alt="" /><img class="active" src="img/page1-img2_hover.png " alt="" /></figure>
            <strong>Innovation and diversity</strong>
            <p>Infrastructure projects are 
                      approached with creativity and 
                      innovation. </p>
            <a href="#" class="btn btn-1">More</a> </div>
        </li>
        <li class="span3">
                  <div class="thumbnail thumbnail-1">
            <figure class=""><img src="img/page1-img3.png " alt="" /><img class="active" src="img/page1-img3_hover.png " alt="" /></figure>
            <strong>A professional 
                    approach</strong>
            <p>We have also won significant 
                      contracts purely on a quality 
                      selection basis.</p>
            <a href="#" class="btn btn-1">More</a> </div>
        </li>
        <li class="span3">
                  <div class="thumbnail thumbnail-1">
            <figure class=""><img src="img/page1-img4.png " alt="" /><img class="active" src="img/page1-img4_hover.png " alt="" /></figure>
            <strong>A sustainable future</strong>
            <p>We're proud of the developments 
                      we've worked on, visit our 
                      online gallery.</p>
            <a href="#" class="btn btn-1">More</a> </div>
        </li>
      </ul>
            </div>
      
      
      </div></div>  
        

<!--============================== content =================================-->

<div id="content" class="content-extra">
          <?php if ($tabs): ?><div id="tabs-wrapper" class="clearfix"><?php endif; ?>
          <?php if ($tabs): ?><?php print render($tabs); ?></div><?php endif; ?>
          <?php print render($tabs2); ?>
          <?php print $messages; ?>
          <?php print render($page['help']); ?>
          <div class="shadow"></div>
          <div class="container">
            <?php print render($page['content']); ?>
    <div class="line-wrapper extra">
              <div class="line-before"></div>
              <h3>recent projects</h3>
              <div class="line-after"></div>
            </div>
    <div class="list_carousel responsive">
              <ul id="carousel">
        <li><img alt="" src="img/page1-img5.jpg">
                  <div class="caption"> <a href="#">coastal protection</a>
            <p>Lorem ipsum dolor sit amet, con.</p>
          </div>
                </li>
        <li><img alt="" src="img/page1-img6.jpg">
                  <div class="caption"> <a href="#">renewable energy</a>
            <p>Lorem ipsum dolor sit amet, con.</p>
          </div>
                </li>
        <li><img alt="" src="img/page1-img7.jpg">
                  <div class="caption"> <a href="#">quarrying</a>
            <p>Lorem ipsum dolor sed  amet, con.</p>
          </div>
                </li>
        <li><img alt="" src="img/page1-img8.jpg">
                  <div class="caption"> <a href="#">land remediation</a>
            <p>Lorem ipsum dolor sit amet, con.</p>
          </div>
                </li>
        <li><img alt="" src="img/page1-img5.jpg">
                  <div class="caption"> <a href="#">coastal protection</a>
            <p>Lorem ipsum dolor sit amet, con.</p>
          </div>
                </li>
        <li><img alt="" src="img/page1-img6.jpg">
                  <div class="caption"> <a href="#">renewable energy</a>
            <p>Lorem ipsum dolor sit amet, con.</p>
          </div>
         </li>
      </ul>
              <div class="clear"></div>
              <a id="prev"  href="javascript:;"></a> <a id="next"  href="javascript:;"></a> </div>
  </div>
          <div class="row-1">
    <div class="shadow"></div>
    <div class="container">
              <div class="line-wrapper extra">
        <div class="line-before"></div>
        <h3>latest news</h3>
        <div class="line-after"></div>
      </div>
              <div class="list_carousel-1 responsive">
        <ul id="carousel-1">
                  <li>
            <time datetime="2013-04-18" class="date-1">18 April, 2013</time>
            <a href="#">Lorem ipsum dolor sit amet, con
                    sectetuer adipiscing.</a>
            <p>Lorem ipsum dolor sit amet, adipiscing elit,
                      sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna
                      aliquam erat volutpat. </p>
          </li>
                  <li>
            <time datetime="2013-04-16" class="date-1">16 April, 2013</time>
            <a href="#">Lorem ipsum dolor sit amet
                    consectetuer adipiscing elit, sed
                    diam nonummy ni.</a>
            <p>Lorem ipsum dolor sit amet,  adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laor. </p>
          </li>
                  <li>
            <time datetime="2013-04-13" class="date-1">13 April, 2013</time>
            <a href="#">Lorem ipsum dolor sit amet, con
                    sectetuer adipiscing.</a>
            <p>Lorem ipsum dolor sit amet,  adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna
                      aliquam erat volutpat.</p>
          </li>
                  <li>
            <time datetime="2013-04-10" class="date-1">10 April, 2013</time>
            <a href="#">Lorem ipsum dolor sit amet
                    consectetuer adipiscing elit, sed
                    diam nonummy ni.</a>
            <p>Lorem ipsum dolor sit amet,  adipiscing elit, sed diam nonummy nibh euismod tincidunt ut.</p>
          </li>
                  <li>
            <time datetime="2013-04-08" class="date-1">08 April, 2013</time>
            <a href="#">Lorem ipsum dolor sit amet, con
                    sectetuer adipiscing.</a>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                      sed diam nonummy nibh euismod  ut laoreet dolore magna
                      aliquam erat volutpat. </p>
          </li>
                  <li>
            <time datetime="2013-04-04" class="date-1">04 April, 2013</time>
            <a href="#">Lorem ipsum dolor sit amet
                    consectetuer adipiscing elit, sed
                    diam nonummy ni.</a>
            <p>Lorem ipsum dolor sit amet, adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laor. </p>
          </li>
                </ul>
        <div class="clear"></div>
        <a id="prev-1"  href="javascript:;"></a> <a id="next-1"  href="javascript:;"></a> </div>
            </div>
    <div class="shadow-1"></div>
  </div>
          <div class="row-2">
    <div class="container">
              <div class="line-wrapper">
        <div class="line-before"></div>
        <h3>our clients</h3>
        <div class="line-after"></div>
      </div>
              <ul class="list-clients">
        <li><a href="#"><img src="img/client-logo1.jpg" alt=""></a></li>
        <li><a href="#"><img src="img/client-logo2.jpg" alt=""></a></li>
        <li><a href="#"><img src="img/client-logo3.jpg" alt=""></a></li>
        <li><a href="#"><img src="img/client-logo4.jpg" alt=""></a></li>
      </ul>
            </div>
  </div>
        </div>

<!--============================== footer =================================-->
<footer>
          <div class="container">
                <?php print render($page['footer']); ?>
          </div>
</footer>
