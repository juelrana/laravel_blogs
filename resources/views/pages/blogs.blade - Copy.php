@extends('master')
@section('main_content')

<div id="templatemo_main">
	<div id="content">
        <div class="post last_box">
               @foreach($all_blog_info as $vblog)
            <h2>{{$vblog->blog_name}}</h2>
            
       <!--     <img src="{{URL::asset($vblog->image)}}" alt="Image 03" height="200px" width="200px" />   -->    
            <p>{{$vblog->long_description}}</p>
            <div class="meta">
                <span class="admin">Smith</span><span class="date">March 13, 2048</span><span class="tag"><a href="#">Templates</a>, <a href="#">Web Designs</a></span><span class="comment"><a href="#">164 comments</a></span>
                <span class="more_but"><a href="blog_post.html" class="more">More</a></span>

                <div class="cleaner"></div>
            </div> 
            <div class="cleaner"></div>
        </div>
        @endforeach
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
            <?php $all_category = DB::table('category')->select('*')
        ->where('publication_status',1)
        ->get();  ?>
            @foreach($all_category as $category)
        	<li><a href="#"> {{ $category->category_name}} </a></li>
            @endforeach
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
