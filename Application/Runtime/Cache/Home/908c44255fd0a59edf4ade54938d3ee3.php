<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

	<title>Empire - XHTML Template</title>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<meta name="description" content="Empire - XHTML Template" />

	<!-- CSS -->	
	<link href='/Public/fonts/sansation.css' rel="stylesheet" type="text/css" />	<!-- Get any font from here easily: http://www.google.com/webfonts -->	
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
							
				<h1><?php echo ($content['content']['title']); ?></h1>
				
				<div class="hr"></div>
				
				<!-- LARGE IMAGE WITH FANCYBOX -->
				<span class="large_image">
					<a href="<?php echo ($content['content']['image']); ?>" rel="" class="fancybox">
						<span class="imghover_large"></span>
						<img src="<?php echo ($content['content']['image']); ?>" width="582" height="184" alt="" />
					</a>
				</span>
				
				<div class="vspace"></div>
				
				<!-- ARTICLE -->
	

				<?php echo ($content['content']['article']); ?>


				<div class="hr2"></div>
			
				<!-- POST INFO -->
				<p class="blog-post-info">&nbsp;
					<img src="/Public/images/icon-time.png" alt="" />&nbsp;<?php echo ($content['content']['time']); ?>&nbsp;&nbsp;
					<img src="/Public/images/sep.gif" alt="" />&nbsp;&nbsp;
					<img src="/Public/images/icon-category.png" alt="" />&nbsp;<a href="#">News</a>, <a href="#">Travel</a>&nbsp;&nbsp;
					<img src="/Public/images/sep.gif" alt="" />&nbsp;&nbsp;
					<!-- <img src="/Public/images/icon-comment.png" alt="" />&nbsp;<?php echo ($content['content']['comment']); ?> Comment(s)&nbsp;&nbsp; -->
				</p>
				
				<div class="hr2"></div>
			
				<!-- COMMENTS -->
			<!-- #	<h2>Comments</h2>				
				
				<ul id="comments-list">

						<?php if(is_array($content['content']['other']['result'])): $i = 0; $__LIST__ = $content['content']['other']['result'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$other): $mod = ($i % 2 );++$i;?><li>					
								<div class="comments-avatar">
									<img alt="" src="http://0.gravatar.com/avatar/ad516503a11cd5ca435acc9bb6523536?s=60" class="avatar" height="60" width="60" />				
								</div>
								<div class="comments-text">
									<?php echo ($other['time']); ?>
									<br /><b>Mr <?php echo ($other['name']); ?></b><br /><?php echo ($other['content']); ?>
									<br /><br />
									<a href='javascript:;' onclick="Replay(this)">回复</a>
								</div>		
							</li><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
				
				<div class="hr2"></div>

				<!-- COMMENTS REPLY -->
				<!-- <h2>Leave a Comment</h2>	 -->

		<!-- 		<form action="post.html" method="post">
				<ul id="respond">
					<li>
						<input name="name" id="author" type="text" class="comment-textinput" value="" />
						<label for="author">Name <span class="required">*</span></label>					
					</li>
					<input name="article_id"  type="hidden"  value="<?php echo ($content['content']['id']); ?>" />
					<li>
						<input name="email" id="email" type="text" class="comment-textinput" value="" />
						<label for="email">Email <span class="required">*</span> <span class="info">(will never be published)</span></label>					
					</li>
					<li>
						<textarea rows="" cols="" class="comment-textarea" name="cotent">
								
						</textarea>
					</li>
					<li>
						<input name="submit" type="submit" id="submit_btn" value="OK" />
					</li>
				</ul>
				</form -->
				
				
				
			
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
			
		</div>		
					
	</div>

	
	<!-- BACKGROUND SLIDER -->
	<div id="bg_slider">	
		<img src="/Public/images/bgslider-1.jpg" alt="" />
		<img src="/Public/images/bgslider-2.jpg" alt="" />
		<img src="/Public/images/bgslider-3.jpg" alt="" />
	</div>
</body>
</html>