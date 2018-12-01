@extends('master');
@section('main_content')


<div id="templatemo_slider">
	<!-- This is the container for the carousel. -->
    <div id = "carousel1" style="width:960px; height:280px;background:none;overflow:scroll; margin-top: 20px">            
        <!-- All images with class of "cloudcarousel" will be turned into carousel items -->
        <!-- You can place links around these images -->
        <a href="http://www.templatemo.com/page/1" rel="lightbox"><img class="cloudcarousel" src="{{asset('public/images/slider/01.jpg')}}" alt="CSS Templates 1" title="Website Templates 1" /></a>
        <a href="http://www.templatemo.com/page/2" rel="lightbox"><img class="cloudcarousel" src="{{asset('public/images/slider/02.jpg')}}" alt="CSS Templates 2" title="Website Templates 2" /></a>
        <a href="http://www.templatemo.com/page/3" rel="lightbox"><img class="cloudcarousel" src="{{asset('public/images/slider/03.jpg')}}" alt="CSS Templates 3" title="Website Templates 3" /></a>
        <a href="http://www.templatemo.com/page/4" rel="lightbox"><img class="cloudcarousel" src="{{asset('public/images/slider/04.jpg')}}" alt="CSS Templates 4" title="Website Templates 4" /></a>
        <a href="http://www.flashmo.com/page/1" rel="lightbox"><img class="cloudcarousel" src="{{asset('public/images/slider/05.jpg')}}" alt="Flash Templates 1" title="Flash Templates 1" /></a>
        <a href="http://www.flashmo.com/page/2" rel="lightbox"><img class="cloudcarousel" src="{{asset('public/images/slider/06.jpg')}}" alt="Flash Templates 2" title="Flash Templates 2" /></a>
        <a href="http://www.flashmo.com/page/3" rel="lightbox"><img class="cloudcarousel" src="{{asset('public/images/slider/07.jpg')}}" alt="Flash Templates 3" title="Flash Templates 3" /></a>
        <a href="http://www.flashmo.com/page/4" rel="lightbox"><img class="cloudcarousel" src="{{asset('public/images/slider/08.jpg')}}" alt="Flash Templates 4" title="Flash Templates 4" /></a>
    </div>
    
    <!-- Define left and right buttons. -->
    <center>
    <input id="slider-left-but" type="button" value="" />
    <input id="slider-right-but" type="button" value="" />
    </center>
</div>
<div id="templatemo_main">
	
    <div class="col one_third fp_services">
    <h2>Welcome!</h2>
        <img src="{{asset('public/images/templatemo_image_04.jpg')}}" alt="Image 04 " class="image_fl" />
        <p><a href="http://www.templatemo.com" target="_parent">Carousel</a> is  free css template provided by <a href="http://www.templatemo.com">templatemo.com</a> for your personal or commercial websites. Quisque nec suscipit ipsum. Fusce vitae accumsan massa.</p>
  		<ul class="templatemo_list">
            <li class="flow">Integer placerat dolor vel</li>
            <li class="flow nomr">Condimentum vulputate</li>
            <li class="flow">Itristique non suscipit id</li>
            <li class="flow nomr"> Donec eget lacus vitae leo</li>
        </ul>
    </div>
    <div class="col one_third fp_services">
        <h2>Recent News</h2>
        <div class="rp_pp">
            <img src="{{asset('public/images/templatemo_image_01.jpg')}}" alt="Image 01" />
            <a href="#">Integer venenatis pharetra magna vitae   condimentum   ultrices.</a>
            <p>Feb 27, 2048 - 140 comments</p>
            <div class="cleaner"></div>
        </div>
        <div class="rp_pp">
            <img src="{{asset('public/images/templatemo_image_02.jpg')}}" alt="Image 02" />
            <a href="#">Nulla facilisi. Vestibulum vel odio ac mi feugiat condimentum.</a>
            <p>Feb 21, 2048 - 154 comments</p>
            <div class="cleaner"></div>
        </div>
        <div class="rp_pp">
            <img src="{{asset('public/images/templatemo_image_03.jpg')}}" alt="Image 03" />
            <a href="#">Fusce dolor neque, placerat ac erat venenatis eu, venenatis ac leo.</a>
            <p>Feb 15, 2048 - 179 comments</p>
            <div class="cleaner"></div>
        </div>
    </div>
    <div class="col one_third no_margin_right fp_services">
        
        <h2>Testimonials</h2>
        <div class="testimonial">
            <p>Nunc vitae purus non augue scelerisque ultricies vitae et velit quis nulla id orci malesua tempus erat.</p>
            <cite>Rock  <a href="#"><span>- CEO, New Company</span></a></cite></div>
    	<div class="testimonial">
            <p>Curabitur sed felis urna, quis eleifend magna. Nunc quam mollis sem iaculis sed. Validate <a href="http://validator.w3.org/check?uri=referer" rel="nofollow"><strong>XHTML</strong></a> &amp; <a href="http://jigsaw.w3.org/css-validator/check/referer" rel="nofollow"><strong>CSS</strong></a>.</p>
    		<cite>John <a href="#"><span>- Senior Director, Company</span></a></cite></div>
    </div>
    
    <div class="cleaner"></div>
</div> <!-- END of templatemo_main -->
@endsection