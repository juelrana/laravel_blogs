@extends('master')
@section('main_content')

<div id="templatemo_main">
	<div id="content">
    	<div class="post">
            	
            <h2>Online Marketing Techniques</h2>
                    
            <img src="{{asset('public/images/blog/01.jpg')}}" alt="Image 01" />   
            <p>Nunc sed leo nunc. Integer nec ante vel sapien vehicula hendrerit vitae non ligula. Integer in nunc nec est condimentum tempus eu quis nunc. Nam arcu dolor, scelerisque eu malesuada in, imperdiet eu nisl. Aliquam posuere leo id enim vulputate sagittis. Integer mauris arcu, tempus iaculis fermentum in, dapibus ut elit. Nulla ut elit eu augue malesuada porta eget eget tortor.</p>
            <div class="meta">
                <span class="admin">Jones</span><span class="date">March 24, 2048</span><span class="tag"><a href="#">Templates</a>, <a href="#">Freebies</a></span><span class="comment"><a href="#">132 comments</a></span>
                <span class="more_but"><a href="blog_post.html" class="more">More</a></span>
                <div class="cleaner"></div>
            </div> 
        </div>
        <div class="post">
            
            <h2>Website Performance Optimizations</h2>
                      
            <img src="{{asset('public/images/blog/02.jpg')}}" alt="Image 02" />
            <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Proin arcu leo, auctor eu vehicula nec, malesuada non augue. Praesent pellentesque, leo pretium eleifend tempor, lorem ante vulputate mi, ac dapibus nunc nisl vel arcu. Donec vitae lectus est, et condimentum ipsum. Nunc vel interdum massa. Vestibulum nec est sapien.</p>
            <div class="meta">
                <span class="admin">Edward</span><span class="date">March 21, 2048</span><span class="tag"><a href="#">Design</a>, <a href="#">Photoshop</a></span><span class="comment"><a href="#">135 comments</a></span>
                <span class="more_but"><a href="blog_post.html" class="more">More</a></span>
                <div class="cleaner"></div>
            </div> 
            
            <div class="cleaner"></div>
        </div>
        <div class="post last_box">
            
            <h2>Animations and Multimedia</h2>
            
            <img src="{{asset('public/images/blog/03.jpg')}}" alt="Image 03" />       
            <p>Maecenas congue dolor ut ipsum consequat nec feugiat arcu egestas. Nam turpis arcu, accumsan vel sollicitudin eu, pretium cursus metus. In felis neque, lobortis sit amet pharetra at, blandit eget nisi. Etiam diam ipsum, molestie vitae volutpat eu, porttitor a eros. Pellentesque orci mi, hendrerit quis pretium ut, bibendum vitae augue. Quisque at vestibulum orci. Validate <a href="http://validator.w3.org/check?uri=referer" rel="nofollow"><strong>XHTML</strong></a> &amp; <a href="http://jigsaw.w3.org/css-validator/check/referer" rel="nofollow"><strong>CSS</strong></a>.</p>
            <div class="meta">
                <span class="admin">Smith</span><span class="date">March 13, 2048</span><span class="tag"><a href="#">Templates</a>, <a href="#">Web Designs</a></span><span class="comment"><a href="#">164 comments</a></span>
                <span class="more_but"><a href="blog_post.html" class="more">More</a></span>
                <div class="cleaner"></div>
            </div> 
            <div class="cleaner"></div>
        </div>
        
         <div class="pagging">
                <ul>
                    <li><a href="http://www.templatemo.com" target="_parent">Previous</a></li>
                    <li><a href="http://www.templatemo.com/page/1" target="_parent">1</a></li>
                    <li><a href="http://www.templatemo.com/page/2" target="_parent">2</a></li>
                    <li><a href="http://www.templatemo.com/page/3" target="_parent">3</a></li>
                    <li><a href="http://www.templatemo.com/page/4" target="_parent">4</a></li>
                    <li><a href="http://www.templatemo.com/page/5" target="_parent">5</a></li>
                    <li><a href="http://www.templatemo.com/page/6" target="_parent">6</a></li>
                    <li><a href="http://www.templatemo.com/page/7" target="_parent">Next</a></li>
                </ul>
            </div>
        <div class="cleaner"></div>
    </div>
    
    <div id="sidebar">
    	<h3>Categories</h3>
        <ul class="templatemo_list">
        	<li><a href="#">Donec tempor dapibus</a></li>
            <li><a href="#">Etiam tempus quam eu</a></li>
        	<li><a href="#">Nullam ornare vulputate</a></li>
            <li><a href="#">Pellentesque eget magna</a></li>
            <li><a href="#">Vestibulum erat dolor</a></li>
        </ul>
        
        <div class="cleaner h30"></div>

        <h3>Recent Posts</h3>
        <ul class="recent_post">
            <li><a href="#">Vivamus imperdiet</a>Nunc ultrices iaculis quam, sed commodo erat tempus mollis.</li>
            <li><a href="#">Pellentesque nunc libero</a>Placerat augue, quis ultricies justo ligula eget justo.</li>
            <li><a href="#">Duis ultricies nulla</a>Etiam nec turpis bibendum massa dapibus dictum.</li>
            <li><a href="#">Proin a elit nisl</a>Donec tincidunt eleifend mauris, ac volutpat leo tincidunt a.</li>
            <li><a href="#">Nunc ultrices iaculis</a>Morbi eget nisi rutrum nisl ultricies venenatis ut sed sem.</li>
        </ul>
    </div> <!-- end of sidebar -->
    <div class="cleaner"></div>
</div> <!-- END of templatemo_main -->


@endsection