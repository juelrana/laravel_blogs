@extends('master')
@section('main_content')


<div id="templatemo_main">
	
    <h2>Contact Information</h2>
        <div class="half float_l">
        <h4>Send us a message now!</h4>
            <p>Sed dictum pretium justo id pretium. Cras mauris lacus, vestibulum ac gravida vel, pellentesque sed urna. Validate <a href="http://validator.w3.org/check?uri=referer" rel="nofollow"><strong>XHTML</strong></a> &amp; <a href="http://jigsaw.w3.org/css-validator/check/referer" rel="nofollow"><strong>CSS</strong></a>.</p>
            <div id="contact_form">
               <form method="post" name="contact" action="#">
                        
                        <label for="author">Name:</label> <input type="text" id="author" name="author" class="required input_field" />
                        <div class="cleaner h10"></div>
                        <label for="email">Email:</label> <input type="text" id="email" name="email" class="validate-email required input_field" />
                        <div class="cleaner h10"></div>
                        
						<label for="subject">Subject:</label> <input type="text" name="subject" id="subject" class="input_field" />

						<div class="cleaner h10"></div>
        
                        <label for="text">Message:</label> <textarea id="text" name="text" rows="0" cols="0" class="required"></textarea>
                        <div class="cleaner h10"></div>
                        
                        <input type="submit" value="Send" id="submit" name="submit" class="submit_btn float_l" />
						<input type="reset" value="Reset" id="reset" name="reset" class="submit_btn float_r" />
                        
            	</form>
            </div>
		</div>
        <div class="half float_r">
        	<h4>Our Branches</h4>
            <h6><strong>Location One</strong></h6>
          		280-560 Sed ac luctus quam et,<br />
          Morbi molestie justo non 12660<br />
                Convallis ac ultrices<br /><br />
				
			<strong>Phone:</strong> 020-190-1080 <br />
            <strong>Email:</strong> <a href="mailto:info@company.com">one@company.com</a>  <br />
            
            <div class="cleaner h40"></div>
            <h6><strong>Location Two</strong></h6>
          		880-990 Praesent quam mauris,<br />
          Fusce cursus turpis lacus 11440<br />
                Donec mauris nunc<br /><br />
				
			<strong>Phone:</strong> 010-447-0250 <br />
            <strong>Email:</strong> <a href="mailto:info@company.com">two@company.com</a>  <br />
            
            <div class="cleaner h40"></div>
            <h6><strong>Location Three</strong></h6>
   		  420-630 Donec scelerisque eleifend,<br />
                Nulla nec leo sit 11990<br />
                Habitant Morbi<br /><br />
				
			<strong>Phone:</strong> 030-080-0220 <br />
            <strong>Email:</strong> <a href="mailto:info@company.com">three@company.com</a>  <br />
            
        </div>
        
        <div class="cleaner h40"></div>
        
        <iframe width="960" height="340" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Central+Park,+New+York,+NY,+USA&amp;aq=0&amp;sll=14.093957,1.318359&amp;sspn=69.699334,135.263672&amp;vpsrc=6&amp;ie=UTF8&amp;hq=Central+Park,+New+York,+NY,+USA&amp;ll=40.778265,-73.96988&amp;spn=0.033797,0.06403&amp;t=m&amp;output=embed"></iframe>
    
    	<div class="cleaner"></div>
    
    <div class="cleaner"></div>
</div> <!-- END of templatemo_main -->



@endsection