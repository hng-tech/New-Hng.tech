@extends('layouts.core')
@section('title', '404')
@section('content')
@section('nav')
<div class="jumbotron-fluid">
    <div>
      @parent
      <div class="container error-page-container">
                    <a class="error-page-btn" href="/">Go Home</a>
                </div>
  </div>
@endsection
<div class="container">
					<div class="row">

						<div class="about-text col-md-6">
							<h1 class="hp-header1">Contact Us</h1>
								<div id="messages" class="hide" role="alert">
              		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              		<div id="messages_content"></div>
            		</div>
							<form action="process" id="form" method="post" class="form-vertical" role="form">
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
						<div class="col-md-6 ap-toon">
							<img class="img-responsive" src="https://res.cloudinary.com/damilare1947/image/upload/v1556533905/undraw_personal_text_vkd8.jpg" width="561" height="525" alt="hng_img">
							<!-- <img class="toon-small-screens" src="../app/img/ladytoon-office-small.svg" alt="lady"> -->
						</div>
					</div>
				</div>
			</div>
		</div>
    <div class="main-footer1" style="margin-top:100px;">
		<div class="container">
			<div class="main-footer-content">
				<p class="">© 2019 HNG internship . All Rights Reserved. HNG Group</p>

				<a href="https://twitter.com/hnginternship"><img src="../app/img/twitter.svg" alt="Find us on twitter"></a>
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

          <a href="https://twitter.com/hnginternship"><img src="../app/img/twitter.svg" alt="Find us on twitter"></a>
        </div>
      </div>
  </div>
</div>-->

<script src="http://code.jquery.com/jquery.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>


	<script src="../app/js/app.js"> </script>
	<script type="text/javascript">
	/* Set the width of the side navigation to 250px */
	function openNav() {
		document.getElementById("mySidenav").style.width = "100%";
		$(".navbar-toggler").prop('disabled',true);

	}

	/* Set the width of the side navigation to 0 */
	function closeNav() {
		document.getElementById("mySidenav").style.width = "0";
		$(".navbar-toggler").prop('disabled',false);
	}
	$('#form').submit(function(e) {
                $('#messages').removeClass('hide').addClass('alert alert-success alert-dismissible').slideDown().show();
                $('#messages_content').html('<h4>Success! You will get a feedback soon</h4>');
                $('#modal').modal('show');
								$("#form")[0].reset();
                e.preventDefault();
            });

	</script>


@endsection
