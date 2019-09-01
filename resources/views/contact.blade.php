@extends('layouts.core')
@section('title', 'contact')
@section('content')
@section('nav')
<div class="jumbotron-fluid">
    <div>
      @parent

<div class="container">
					<div class="row">
						<div class="about-text col-md-6">
							<h1 class="hp-header1">Contact Us</h1>


              @if (\Session::has('message'))
								<div id="messages" role="alert">
              		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              		<div id="messages_content">{{ \Session::get('message') }}</div>
            		</div>
                  @endif
							<form action="" id="form" method="post" class="form-vertical" role="form">
                @csrf
                <div class="form-group form-contact">
                  <label for="Full Name">Full Name</label>
                  <input type="text" class="form-text form-control"  name="visitor_name" placeholder="Your Name" pattern="[A-Z\sa-z]{3,20}"  required/>
                </div>
                <div class="form-group form-contact">
                  <label for="Email-Address">Email-Address</label>
                  <input type="email" class="form-text form-control"   name="visitor_email" placeholder="you@Example.com"pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required/>
                </div>
								<div class="form-group form-contact">
                  <input type="hidden" name="contactus">
                </div>
                <div class="form-group form-contact">
                  <label for="Message">Message</label>
                  <textarea name="visitor_message" rows="5"  cols="10"   class="form-text1 form-control" placeholder="Message"></textarea>
                </div>
                <div class="form-group form-contact">
                  <p class="form-contact text-right"><input type="submit" class="btn btn-info"   value="Submit"/></p>
                </div>
              </form>
						</div>
						<div class="col-md-6 ap-toon" style="position: unset !important;">
							<img class="img-responsive" src="https://res.cloudinary.com/damilare1947/image/upload/v1556533905/undraw_personal_text_vkd8.jpg" width="561" height="525" alt="hng_img">
							<!-- <img class="toon-small-screens" src="{{ asset('img/ladytoon-office-small.svg') }}" alt="lady"> -->
						</div>
					</div>
				</div>
			</div>
		</div>

	<!--Banner-->
<!--
<div class="footer1">
  <div class="main-footer">
      <div class="container">
        <div class="main-footer-content">
          <p class="">© 2019 HNG internship . All Rights Reserved. HNG Group</p>

          <a href="https://twitter.com/hnginternship"><img src="{{ asset('img/twitter.svg') }}" alt="Find us on twitter"></a>
        </div>
      </div>
  </div>
</div>-->

@endsection



@endsection
