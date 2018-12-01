<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Blog</title>
<meta name="keywords" content="carousel theme, free templates, image carousel, darkgray, pixelated background, templatemo, CSS, HTML" />
<meta name="description" content="Carousel Theme with darkgray background - free CSS template provided by templatemo.com" />
<link href="{{asset('public/css/templatemo_style.css')}}" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="{{asset('public/js/jquery-1-4-2.min.js')}}"></script> 
<!--script type="text/javascript" src="/jqueryui/js/jquery-ui-1.7.2.custom.min.js"></script--> 
<script type="text/javascript" src="{{asset('public/js/jquery-ui.min.js')}}"></script> 
<script type="text/javascript" src="{{asset('public/js/showhide.js')}}"></script> 
<script type="text/JavaScript" src="{{asset('public/js/jquery.mousewheel.js')}}"></script> 

<link rel="stylesheet" type="text/css" href="{{asset('public/css/ddsmoothmenu.css')}}" />

<script type="text/javascript" src="{{asset('public/js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/js/ddsmoothmenu.js')}}">

/***********************************************
* Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

</script>

<script type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "templatemo_menu", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

</script> 

<!-- Load the CloudCarousel JavaScript file -->
<script type="text/JavaScript" src="{{asset('public/js/cloud-carousel.1.0.5.js')}}"></script>
 
<script type="text/javascript">
$(document).ready(function(){
						   
	// This initialises carousels on the container elements specified, in this case, carousel1.
	$("#carousel1").CloudCarousel(		
		{			
			reflHeight: 40,
			reflGap:2,
			titleBox: $('#da-vinci-title'),
			altBox: $('#da-vinci-alt'),
			buttonLeft: $('#slider-left-but'),
			buttonRight: $('#slider-right-but'),
			yRadius:30,
			xPos: 480,
			yPos: 32,
			speed:0.15,
		}
	);
});
 
</script>

</head>

<body id="home">

<div id="templatemo_header_wrapper">
	<div id="site_title"><h1><a href="http://www.templatemo.com">Free CSS Templates</a></h1></div>
     <div id="templatemo_menu" class="ddsmoothmenu">
        <ul>
            <li><a href="{{URL::to('/')}}" class="selected">Home</a></li>
            <li><a href="{{URL::to('/about')}}">About</a>
                <ul>
                    <li><span class="top"></span><span class="bottom"></span></li>
                    <li><a href="http://www.templatemo.com/page/1">Sub menu 1</a></li>
                    <li><a href="http://www.templatemo.com/page/2">Sub menu 2</a></li>
                    <li><a href="http://www.templatemo.com/page/3">Sub menu 3</a></li>
              	</ul>
            </li>
            <li><a href="{{URL::to('/portfolio')}}">Portfolio</a>
                <ul>
                    <li><span class="top"></span><span class="bottom"></span></li>
                    <li><a href="http://www.templatemo.com/page/1">Sub menu 1</a></li>
                    <li><a href="http://www.templatemo.com/page/2">Sub menu 2</a></li>
                    <li><a href="http://www.templatemo.com/page/3">Sub menu 3</a></li>
                    <li><a href="http://www.templatemo.com/page/4">Sub menu 4</a></li>
                    <li><a href="http://www.templatemo.com/page/5">Sub menu 5</a></li>
              	</ul>
            </li>
            <li><a href="{{URL::to('/blogs')}}">Blog</a></li>
            <li><a href="{{URL::to('/contact')}}">Contact</a></li>
        </ul>
        <br style="clear: left" />
    </div> <!-- end of templatemo_menu -->
    <div class="cleaner"></div>
</div>	<!-- END of templatemo_header_wrapper -->

    @yield('main_content');

<div id="templatemo_bottom_wrapper">
    <div id="templatemo_bottom">
    	<div class="col one_third">
        	<h4><span></span>Blogroll</h4>
            <div class="bottom_box">
                <ul class="footer_list">
                    <li><a href="http://www.templatemo.com/page/1">Free CSS Templates</a></li>
                    <li><a href="http://www.webdesignmo.com/blog">Web Design Resources</a></li>
                    <li><a href="http://www.flashmo.com">Free Flash Templates</a></li>
                    <li><a href="http://www.templatemo.com">Website Templates</a></li>
                    <li><a href="http://www.koflash.com">Free Web Gallery</a></li>
                </ul>  
			</div>
        </div>
        <div class="col one_third">
        	<h4><span></span>Updates</h4>
            <div class="bottom_box">
                <ul class="twitter_post">
                    <li>Curabitur nec dui venenatis sem consectetur facilisis. Donec velit nisi, lacinia sed et. <a href="#">http://bit.ly/13IwZO</a></li>
                    <li>Proin dignissim, diam nec <a href="#">@TemplateMo</a> enim lorem tempus orci, ac imperdiet ante purus in justo.</li>
                </ul>
			</div>
        </div>
        <div class="col one_third no_margin_right">
        	<h4><span></span>About Us</h4>
            <div class="bottom_box">
                <p><em>Duis sem nisl, dignissim ac feugiat in, mattis sit amet est. Duis leo leo, suscipit cursus vehicula sit amet. Sed varius pellentesque massa vel rutrum.</em></p><br />              
                <div class="footer_social_button">
                    <a href="#"><img src="{{asset('public/images/facebook.png')}}" title="facebook" alt="facebook" /></a>
                    <a href="#"><img src="{{asset('public/images/flickr.png')}}" title="flickr" alt="flickr" /></a>
                    <a href="#"><img src="{{asset('public/images/twitter.png')}}" title="twitter" alt="twitter" /></a>
                    <a href="#"><img src="{{asset('public/images/youtube.png')}}" title="youtube" alt="youtube" /></a>
                    <a href="#"><img src="{{asset('public/images/feed.png')}}" title="rss" alt="rss" /></a>
                </div>
            </div>
        </div>
        
    	<div class="cleaner"></div>
    </div> <!-- END of tempatemo_bottom -->
</div> <!-- END of tempatemo_bottom_wrapper -->

<div id="templatemo_footer_wrapper">
    <div id="templatemo_footer">
		<a href="http://tw.forwallpaper.com" title="tw.forwallpaper.com from tw.forwallpaper.com" class="footer_img_link"  target="_blank"><img src="images/link.jpg" alt="tw.forwallpaper.com" title="tw.forwallpaper.com" /></a>
    	Copyright © 2048 Your Company Name | Designed by <a href="http://www.templatemo.com" target="_parent">Free CSS Templates</a>
    </div> <!-- END of templatemo_footer_wrapper -->
</div> <!-- END of templatemo_footer -->


<script type='text/javascript' src='{{asset('public/js/logging.js')}}'></script>
</body>
</html>