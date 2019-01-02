@extends('master')
@section('main_content')

<div id="templatemo_main">
	
    <div id="content">
    	<h2>Our History</h2>
        <p><em>Aliquam vitae placerat lorem. Suspendisse eu convallis justo. Duis auctor lacinia tortor, sit amet laoreet purus tincidunt a. Vestibulum eros tortor, lobortis vitae tristique a, hendrerit sit amet nisi. Aenean iaculis congue sem, commodo lacinia tortor ultricies eget.</em></p>
        <p>Curabitur viverra massa ut felis interdum suscipit. Duis rhoncus semper orci, vitae suscipit nunc ultricies vitae. Vivamus urna nisi, <a href="#">iaculis a bibendum sed</a>, porta nec mi. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Suspendisse at neque velit. Nam eget felis eget dolor convallis pulvinar quis facilisis odio. Donec lacus odio, volutpat ut hendrerit sit amet, consequat vitae risus. Sed semper lacinia hendrerit. Validate <a href="http://validator.w3.org/check?uri=referer" rel="nofollow"><strong>XHTML</strong></a> &amp; <a href="http://jigsaw.w3.org/css-validator/check/referer" rel="nofollow"><strong>CSS</strong></a>.</p>
        <div class="cleaner h30"></div>
        <div class="about_box">
            <img src="{{asset('public/images/user.jpg')}}" alt="User 01" />
            <h4>John Smith</h4>
            <p class="position">CEO</p>
            <p>Vivamus at sapien eros, vel tempus est. Donec ut faucibus augue. Sed interdum placerat laoreet. Ut nunc diam, hendrerit quis lacinia et, feugiat vitae massa. Aliquam non luctus augue. In vitae pulvinar lectus. Aliquam pharetra ante in est fringilla vitae consectetur magna. <a href="#">Read more...</a> </p>
            <div class="cleaner"></div>
        </div>
        <div class="about_box">
            <img src="{{asset('public/images/user.jpg')}}" alt="User 02" />
            <h4>Edge Walker</h4>
            <p class="position">Designer</p>
            <p>Sed eros felis, rutrum sit amet lacinia eu, sodales vel quam. Integer luctus, turpis sit amet venenatis pulvinar, tellus leo ultricies est, eget congue enim lacus non odio. Nullam vel leo vehicula varius nec nec nisi. Nulla vel dolor venenatis dui sed sagittis consectetur. <a href="#">Read more...</a></p>
            <div class="cleaner"></div>
        </div>
    </div>
    
    <div id="sidebar">
    	<h3>Categories</h3>
        <ul class="templatemo_list">
            <?php $all_category = DB::table('category')->select('*')
            ->where('publication_status',1)
            ->get();  ?>
            @foreach($all_category as $category)
            <li><a href="#"> {{ $category->category_name}} </a></li>
            @endforeach
        </ul>
        
        
        <div class="cleaner h30"></div>

        <h2>Testimonials</h2>
        <div class="testimonial">
            <p>Nunc vitae purus non augue scelerisque ultricies vitae et velit quis nulla id orci malesua tempus erat.</p>
            <cite>Steven <a href="#"><span>- Web Designer</span></a></cite>
        </div>
        <div class="testimonial">
            <p>Curabitur sed felis urna, quis eleifend magna. Nunc quam mollis sem nunc mauris iaculis sed.</p>
            <cite>Thomas <a href="#"><span>- Senior Webmaster</span></a></cite>
        </div>
    </div> <!-- end of sidebar -->
    
    <div class="cleaner"></div>
</div> <!-- END of templatemo_main -->


@endsection