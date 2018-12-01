@extends('master')
@section('main_content')

<div id="templatemo_main">

			<h2>Portfolio</h2>
            
			<div class="col one_fourth gallery_box">
                <a href="#" rel="lightbox[portfolio]"><img src="{{asset('public/images/portfolio/01.jpg')}}" alt="Image 01" class="image_frame"/></a>
                <h5>Maecenas Orci Varius</h5>
                <p>Duis feugiat lacus et lacus sodales id semper vel mi congue massa posuere.</p>
			</div>
            
            <div class="col one_fourth gallery_box">
                <a href="#" rel="lightbox[portfolio]"><img src="{{asset('public/images/portfolio/02.jpg')}}" alt="Image 02" class="image_frame"/></a>
                <h5>Tempor Eget leo</h5>
                <p>Morbi porta, sem vitae lacinia convallis ultricies arcu neque eu elit.</p>
			</div>
            
            <div class="col one_fourth gallery_box">
                <a href="#" rel="lightbox[portfolio]"><img src="{{asset('public/images/portfolio/02.jpg')}}" alt="Image 03" class="image_frame"/></a>
                <h5>Duis Feugiat Lacus</h5>
                <p>Aenean suscipit neque in nibh eleifend dictum. Validate <a href="http://validator.w3.org/check?uri=referer" rel="nofollow"><strong>XHTML</strong></a> &amp; <a href="http://jigsaw.w3.org/css-validator/check/referer" rel="nofollow"><strong>CSS</strong></a>.</p>
			</div>
            
            <div class="col one_fourth gallery_box no_margin_right">
                <a href="#" rel="lightbox[portfolio]"><img src="{{asset('public/images/portfolio/03.jpg')}}" alt="Image 04" class="image_frame"/></a>
                <h5>Donec in Volutpat Erat</h5>
                <p>Aliquam rutrum vehicula turpis. Quisque at sapien odio, id placerat neque. </p>
			</div>
            
            <div class="col one_fourth gallery_box">
                <a href="#" rel="lightbox[portfolio]"><img src="{{asset('public/images/portfolio/04.jpg')}}" alt="Image 05" class="image_frame"/></a>
                <h5>Class Aptent Taciti </h5>
                <p>Fusce fringilla mollis tincidunt. Nullam accumsan bibendum risus facilisis.</p>
			</div>
            
            <div class="col one_fourth gallery_box">
                <a href="#" rel="lightbox[portfolio]"><img src="{{asset('public/images/portfolio/05.jpg')}}" alt="Image 06" class="image_frame"/></a>
                <h5>Consectetur Adipiscing</h5>
                <p> Vestibulum quis nulla nunc, nec lobortis nunc sed ac arcu ipsum, ut suscipit neque.</p>
			</div>
            
            <div class="col one_fourth gallery_box">
                <a href="#" rel="lightbox[portfolio]"><img src="{{asset('public/images/portfolio/05.jpg')}}" alt="Image 07" class="image_frame"/></a>
                <h5>Donec Purus Nulla</h5>
                <p>Suspendisse tempus hendrerit luctus. Donec fringilla volutpat felis ut bibendum.</p>
			</div>
            
            <div class="col one_fourth gallery_box no_margin_right">
                <a href="#" rel="lightbox[portfolio]"><img src="{{asset('public/images/portfolio/06.jpg')}}" alt="Image 08" class="image_frame"/></a>
                <h5>Nullam Gravida Quam</h5>
                <p> Pellentesque convallis tristique mauris, id tempor odio faucibus et.  </p>
			</div>
            
            <div class="cleaner"></div>
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
</div> <!-- END of templatemo_main -->


@endsection