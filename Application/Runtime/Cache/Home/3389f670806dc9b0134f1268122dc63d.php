<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

	<title>Empire - XHTML Template</title>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<meta name="description" content="Empire - XHTML Template" />

	<!-- CSS -->	
	<link href="/Public/fonts/sansation.css" rel="stylesheet" type="text/css" />	<!-- Get any font from here easily: http://www.google.com/webfonts -->	
	<link href="/Public/css/style.css" rel="stylesheet" type="text/css" />	
	<link href="/Public/fancybox/jquery.fancybox-1.3.4.css" rel="stylesheet" type="text/css" />
	<link href="/Public/css/nivo-slider.css" rel="stylesheet" type="text/css" />
	<link href="/Public/css/styler-farbtastic.css" rel="stylesheet" type="text/css" />
	
	<!-- UPDATE BROWSER WARNING IF IE 7 OR LOWER -->
	<!--[if lt IE 8]>
	<link href="css/stop_ie.css" rel="stylesheet" type="text/css" />
	<![endif]-->

	
	<!-- JAVASCRIPTS -->
	<script type="text/javascript" src="/Public/js/jquery.min.js"></script>	
	<script type="text/javascript" src="/Public/js/jquery-ui-1.8.17.custom.min.js"></script>			
	<script type="text/javascript" src="/Public/fancybox/jquery.fancybox-1.3.4.pack.js"></script>	
	<script type="text/javascript" src="/Public/js/jquery.nivo.slider.js"></script>			
	<script type="text/javascript" src="/Public/js/jquery.bgslider.js"></script>
	<script type="text/javascript" src="/Public/js/preloader.js"></script>
	<script type="text/javascript" src="/Public/js/farbtastic.js"></script>
	<script type="text/javascript" src="/Public/js/basic.js"></script>
	<script type="text/javascript" src="/Public/js/styler.js"></script>
	<script type="text/javascript" src="/Public/js/contact_form.js"></script>
		
		
</head>
<body>
	
	<!-- DISPLAY MESSAGE IF JAVA IS TURNED OFF -->
	<noscript>		
		<div id="notification">Please turn on javascript in your browser for the maximum experience!</div>
	</noscript>

	<!-- DISPLAY THIS MESSAGE IF USER'S BROWSER IS IE7 OR LOWER -->
	<div id="ie_warning"><img src="/Public/images/warning.png" alt="" /><br /><strong>Your browser is out of date!</strong><br /><br />This website uses the latest web technologies so it requires an up-to-date, fast browser!<br />Try <a href="http://www.mozilla.org/en-US/firefox/new/?from=getfirefox">Firefox</a> or <a href="https://www.google.com/chrome">Chrome</a>!</div>


	<!-- STYLER FOR DEMO -->
	<div id="styler">
		<div id="styler-button"><a href="#"><img src="/Public/images/styler-button.png" alt="" /></a></div>
			
		<div class="styler-title"><img src="/Public/images/styler-t1.png" alt="" /></div>
			
		<ul id="texture">	
			<li><a href="#" id="styler-texture-1">None</a></li>
			<li id="selected"><a href="#" id="styler-texture-2">Leather</a></li>
			<li><a href="#" id="styler-texture-3">Carbon</a></li>
		</ul>
		
		<div class="styler-title"><img src="/Public/images/styler-t2.png" alt="" /></div>
		
		<div id="styler-colorpicker" class="colorpicker"></div>
	</div>


	<!-- SITE WRAPPER -->
	<div id="wrapper">
	
		<!-- PAGE WITH CONTENTS -->
		<div id="page">
			<div id="content">
			
				
				<h1>Posts from the blog</h1>
				
				<div class="hr"></div>
				
				<!-- BLOG POSTS WITH SMALL THUMBS -->
				<ul id="blog-small">			
					
					<?php if(is_array($content['content'])): $i = 0; $__LIST__ = $content['content'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$con): $mod = ($i % 2 );++$i;?><li> 
							<div class="blog-small-image">
								<a href="/s/post/article/<?php echo ($con['id']); ?>"><span class="imghover_small_blog"></span><img src="<?php echo ($con['image']); ?>" alt="" /></a>
							</div>				
							<div class="blog-small-text">
								<h1><a href="/s/post.html/article/<?php echo ($con['id']); ?>"><?php echo ($con['title']); ?></a></h1>

								<p class="blog-info">&nbsp;<img src="/Public/images/icon-time.png" alt="" />&nbsp;<?php echo ($con['time']); ?>&nbsp; 
									<img src="/Public/images/sep.gif" alt="" />&nbsp;&nbsp;<img src="/Public/images/icon-category.png" alt="" /><a href="#">News</a>, <a href="#">Travel</a>&nbsp;&nbsp;<img src="/Public/images/sep.gif" alt="" />&nbsp;&nbsp;
									<img src="/Public/images/icon-comment.png" alt="" />&nbsp;<?php echo ($con['comment']); ?> Comment(s)
								</p>
								<p class="blog-small-excerpt"><?php echo ($con['article']); ?> <br /><a href="/s/post.html/article/<?php echo ($con['id']); ?>" class="read_more">Continue reading &rarr;</a></p>						
							</div>
						</li>				
						<!-- POST SEPARATOR -->

						<li class="blog-small-sep"></li><?php endforeach; endif; else: echo "" ;endif; ?>
				
				


				</ul><!-- #blog-small ends -->
			
				<div class="hr"></div>
			
			
				<!-- FOOTER -->
				<!-- <div id="footer_widget_area"> -->
					<!-- FIRST FOOTER AREA / POPULAR POSTS -->
					<!-- <div id="first">
						<h3>Popular Posts</h3>	
						
						<ul class="posts_list">
							<li>
								<p class="posts_list_pic">
									<a href="post.html"><img src="/Public/images/post-tn1.jpg" alt="" /></a>
								</p>
								
								<p class="posts_list_excerpt">
									<a href="post.html"><strong>Praesent vitae velit convallis</strong></a>
									<br />February 22, 2012
								</p>
							</li>
								
							<li>
								<p class="posts_list_pic">
									<a href="post.html"><img src="/Public/images/post-tn1.jpg" alt="" /></a>
								</p>
								
								<p class="posts_list_excerpt">
									<a href="post.html"><strong>Lorem ipsum dolor sit amet</strong></a>
									<br />January 28, 2012
								</p>
							</li>

							<li>
								<p class="posts_list_pic">
									<a href="post.html"><img src="/Public/images/post-tn1.jpg" alt="" /></a>
								</p>
								
								<p class="posts_list_excerpt">
									<a href="post.html"><strong>Mauris nec velit tortor quis </strong></a>
									<br />March 14, 2012
								</p>
							</li>
						</ul>
					</div> -->
					
					<!-- SECOND FOOTER AREA / ARCHIVES -->
					<!-- <div id="second">
						<h3>Archives</h3>		
						
						<ul class="archives">
							<li><a href="#" title="March 2012">March 2012</a></li>
							<li><a href="#" title="February 2012">February 2012</a></li>
							<li><a href="#" title="January 2012">January 2012</a></li>
							<li><a href="#" title="December 2011">December 2011</a></li>
						</ul>					
					</div> -->
					
					<!-- THIRD FOOTER AREA / CONTACT FORM -->
					<!-- <div id="third">
						<h3>Contact Form</h3>		
					
						<form action="" id="contact_form" method="post">
						<ul class="contact_form">		
							<li><input type="text" id="ub_w_cf1" name="ub_w_cf_name" /><label>Name</label></li>
							<li><input type="text" id="ub_w_cf2" name="ub_w_cf_email" /><label>Email</label></li>
							<li><textarea id="ub_w_cf3" rows="" cols="" name="ub_w_cf_msg" class="required"></textarea></li>
							<li><input type="text" id="ub_w_cf4" name="ub_w_cf_captcha" class="required" maxlength="4" /><img src="/Public/captcha.php" id="captcha" alt="" /><label>Captcha</label></li>
							<li id="ub_w_cf_sbtn"><input class="send_button" type="submit" value="OK" /></li>		
						</ul>	
						</form>	
					</div>				 -->
				<!-- </div> -->
			
			
			</div><!-- #content ends -->	
		</div><!-- #page ends -->
			
		
		<!-- SIDEBAR -->
		<div id="sidebar">	
			<div id="sidebar-color"></div>		<!-- SIDEBAR COLOR LAYER -->
			<div id="sidebar-border"></div>		<!-- SIDEBAR BORDER LAYER -->
			<div id="sidebar-light"></div>		<!-- SIDEBAR RADIAL GRADIENT LIGHT LAYER -->
			<div id="sidebar-texture"></div>	<!-- SIDEBAR TEXTURE LAYER -->
			
			<!-- SIDEBAR CONTENT LAYER -->
			<div id="sidebar-content">	
			
				<!-- LOGO -->
				<div id="logo">
					<a href="index.html"><img src="/Public/images/logo.png" alt="" /></a>
				</div>
					
				<!-- MENU -->
				<ul id="menu">
					<!-- <li class="current"><a href="index.html">HOME</a></li>
<li><a href="blog-1.html">BLOG</a>
	<ul>
		<li><a href="blog-1.html">BLOG STYLE #1</a></li>
		<li><a href="blog-2.html">BLOG STYLE #2</a></li>
	</ul>
</li>
<li><a href="portfolio-3c.html">PORTFOLIO</a>
	<ul>
		<li><a href="portfolio-3c.html">PORTFOLIO &#8211; 3 COLUMNS</a></li>
		<li><a href="portfolio-2c.html">PORTFOLIO &#8211; 2 COLUMNS</a></li>							
	</ul>
</li>
<li><a href="gallery.html">GALLERY</a></li>
<li><a href="#">STYLINGS</a>
	<ul>
		<li><a href="stylings-texts.html">TEXTS</a></li>
		<li><a href="stylings-table_columns.html">TABLE &#038; COLUMNS</a></li>
		<li><a href="stylings-tabs_toggles.html">TABS, TOGGLES &#038; CAROUSEL</a></li>
		<li><a href="stylings-images_videos.html">IMAGES &#038; VIDEOS</a></li>
		<li><a href="stylings-contact_buttons.html">CONTACT FORM &#038; BUTTONS</a></li>
	</ul>
</li> -->

<?php if(is_array($menu)): foreach($menu as $key=>$menuSelf): ?><li <?php if(($self == $menuSelf[1])): ?>class="current"<?php endif; ?> ><a href="\s\<?php echo ($menuSelf[1]); ?>"><?php echo ($menuSelf[0]); ?></a></li><?php endforeach; endif; ?>
				</ul>
						
			</div><!-- #sidebar-content ends -->	

			<!-- SOCIAL ICONS ON SIDEBAR'S BOTTOM PART -->
			<ul id="sidebar-bottom">			
				<li><a href="#"><img src="/Public/images/sidebar_icons/facebook.png" alt="" /></a></li>
				<li><a href="#"><img src="/Public/images/sidebar_icons/twitter.png" alt="" /></a></li>
				<li><a href="#"><img src="/Public/images/sidebar_icons/rss.png" alt="" /></a></li>
			</ul>
			
			<!-- COPYRIGHT TEXT -->
			<p id="copyright">EMPIRE XHTMLMore Templates <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a> - Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a></p>
			
		</div><!-- #sidebar ends -->			
					
	</div><!-- #wrapper ends -->

	
	<!-- BACKGROUND SLIDER -->
	<div id="bg_slider">	
		<img src="/Public/images/bgslider-1.jpg" alt="" />
		<img src="/Public/images/bgslider-2.jpg" alt="" />
		<img src="/Public/images/bgslider-3.jpg" alt="" />
	</div>


</body>
</html>