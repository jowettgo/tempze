<script>$( '#nav li:has(ul)' ).doubleTapToGo();</script>
<script>$( '#navs li:has(ul)' ).doubleTapToGo();</script>

<div id="backtotop">
    <a href="#"></a>
</div>
<script>
jQuery(document).ready(function(){
		var pxShow = 300;//height on which the button will show
		var fadeInTime = 1000;//how slow/fast you want the button to show
		var fadeOutTime = 1000;//how slow/fast you want the button to hide
		var scrollSpeed = 1000;//how slow/fast you want the button to scroll to top. can be a value, 'slow', 'normal' or 'fast'
		jQuery(window).scroll(function(){
			if(jQuery(window).scrollTop() >= pxShow){
				jQuery("#backtotop").fadeIn(fadeInTime);
			}else{
				jQuery("#backtotop").fadeOut(fadeOutTime);
			}
		});
		 
		jQuery('#backtotop a').click(function(){
			jQuery('html, body').animate({scrollTop:0}, scrollSpeed); 
			return false; 
		}); 
	});</script>
<?php
	// footer can be setup to a maximum of 3 columns

	$sidebars = (int) is_active_sidebar('hrb-footer') + (int) is_active_sidebar('hrb-footer2') + (int) is_active_sidebar('hrb-footer3') + (int) is_active_sidebar('hrb-footer4');

	if ( ! $sidebars ) { $sidebars = 1;	}

	$columns = 12 / $sidebars;
?>
<!-- Footer Widgets -->
<div id="footer">
    <div class="row widgets-footer">
        <div class="large-12 columns wrap">
            <div id="footer-widget1" class="f-widget 
                <?php echo "large-{$columns}"; ?> columns">
                <?php dynamic_sidebar('hrb-footer'); ?>
            </div>
            <?php if ( is_active_sidebar('hrb-footer2') ) : ?>
            <div id="footer-widget2" class="f-widget 
                <?php echo "large-{$columns}"; ?> columns">
                <?php dynamic_sidebar('hrb-footer2'); ?>
            </div>
            <?php endif; ?>
            <?php if ( is_active_sidebar('hrb-footer3') ) : ?>
            <div id="footer-widget3" class="f-widget 
                <?php echo "large-{$columns}"; ?> columns">
                <?php dynamic_sidebar('hrb-footer3'); ?>
            </div>
            <?php endif; ?>
            <?php if ( is_active_sidebar('hrb-footer4') ) : ?>
            <div id="footer-widget4" class="f-widget 
                <?php echo "large-{$columns}"; ?> columns">
                <?php dynamic_sidebar('hrb-footer4'); ?>
            </div>
            <?php endif; ?>
        </div>
    </div>
    <!-- End footer Widgets -->
    
    <!-- Footer -->
    
    <style>
    
#footer-area-custom {
  	background: #1a1a1a;
  	width: 100%;
  	height: 70px;
}

#copyright-menu-area {
	margin: 0 auto;
	width: 80%;
	padding: 10px 20px;
	background: inherit;
}

#copyright-year {
	float: left;
	width: 45%;
	margin: 0;
	padding: 5px;
	background: transparent;
}

#copyright-year p {
	color: #999999!important;
	font-size: 15px;
	font-weight: bold;
	background: transparent;
}

#footermenus {
	float: right;
	width: 49%;
	margin: 0;
	padding: 5px;
	background: transparent;
}


#footermenus ul {
	list-style: none;
	background: transparent;
}


#footermenus ul li {
	color: #999!important;
	font-size: 15px;
	float: right;
	padding-left: 20px;
	margin: 0;
	list-style: none;
	text-transform: uppercase;	
	font-weight: bold;
	background: transparent;
}

#footermenus ul li a {
	color: #999!important;
	margin: 0;

	text-decoration: none;
}

#footermenus ul li a:hover {
	color: #fdc600!important;
	font-size: 15px;
}
</style>

<div id="footer-area-custom">
	<div id = "copyright-menu-area">
		<div id="copyright-year">
			<p> COPYRIGHT 2015 &copy TEMPZE. ALL RIGHTS RESERVED </p>
		</div>
	
		<div id="footermenus">
			<ul>
				
				
				
				<li><a href="http://www.tempze.com/site-terms/">Site Terms</a></li>
				<li><a href="http://www.tempze.com/how-it-works/">How it Works</a></li>
				<li><a href="http://www.tempze.com/about/">About Us</a></li>
				<li><a href="http://www.tempze.com/">Home</a></li>
				
				
			</ul>	
		</div>
	
</div>
</div>
   
<!-- end #footer -->
