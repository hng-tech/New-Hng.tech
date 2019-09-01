<?php
error_reporting(-1);
$url        = $_SERVER['REQUEST_URI'];
$url        = str_replace('/', '', $url);
$logo       = asset('img/brand-logo.png');
$about      = '../about';
$interns    = '../interns';
$support    = '../support';
$becomeIntern = '../become-intern';
$blog = '../blog';
$products = '../products';

?>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>@yield('title')</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('css/app.css')}}" type="text/css"/>
	<link rel="stylesheet" href="{{ asset('css/hng5-finalists.css')}}" type="text/css"/>
	<link rel="stylesheet" href="{{ asset('css/interns.css')}}" type="text/css"/>
	<link rel="stylesheet" href="{{ asset('css/past-interns.css')}}" type="text/css"/>
	<link rel="shortcut icon" type="image/png" href="{{ asset('img/fav.png')}}" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css" />


</head>
<body>


@section('nav')

<!--Navigation ends-->

<nav class="navbar navbar-light">
	<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" onclick="openNav()" data-toggle="collapse" data-target="" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span style="font-size: 30px">&#9776;</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="/"><img src="<?php echo $logo ?>"></a>
		</div>
		<div id="mySidenav" class="sidenav" style="padding-top: 100px">
			<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
			<a class="navbar-link nav-text" href="<?php echo $about ?>">WHAT IS THE INTERNSHIP?</a>
			<a class="navbar-link nav-text" href="<?php echo $interns ?>">THE INTERNS (SO FAR)</a>
			<!-- <a class="navbar-link nav-text" href="<?php echo $products ?>">PRODUCTS</a> -->
			<a class="navbar-link nav-text" href="<?php echo $support ?>">SUPPORT THE MISSION</a>
			<a class="navbar-link nav-text" href="<?php echo $becomeIntern ?>">BECOME AN INTERN</a>
			<!-- <a class="navbar-link nav-text" href="<?php echo $blog ?>">BLOG</a> -->
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="">
			<ul class="nav navbar-nav navbar-right">
				<li class="nav-item <?php if($url == 'about'){echo 'active';}?> ">
					<a class="navbar-link nav-text" href="<?php echo $about ?>">WHAT IS THE INTERNSHIP?</a>
				</li>
				<li class="nav-item <?php if($url == 'interns'){echo 'active';}?> ">
					<a class="navbar-link nav-text" href="<?php echo $interns ?>">THE INTERNS (SO FAR)</a>
				</li>
				<!-- <li class="nav-item <?php if($url == 'products'){echo 'active';}?> ">
					<a class="navbar-link nav-text" href="<?php echo $products ?>">PRODUCTS</a>
				</li> -->
				<li class="nav-item <?php if($url == 'support'){echo 'active';}?>">
					<a class=" navbar-link nav-text" href="<?php echo $support ?>">SUPPORT THE MISSION</a>
				</li>
				<li class="nav-item <?php if($url == 'become-intern'){echo 'active';}?>">
					<a class=" navbar-link nav-text" href="<?php echo $becomeIntern ?>">BECOME AN INTERN</a>
					<!-- <li class="nav-item <?php if($url == 'blog'){echo 'active';}?>">
					<a class=" navbar-link nav-text" href="<?php echo $blog ?>">BLOG</a> -->
				</li>
				</li>
			</ul>
		</div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav>

<script>
	function openNav() {
		document.getElementById("mySidenav").style.width = "250px";
	}

	function closeNav() {
		document.getElementById("mySidenav").style.width = "0";
	}
</script>
@show
            @yield('content')

            <footer class="footer">
      	<div class="container sub-footer">
      		<div class="footer-logo">
      			<img src="{{ asset('img/brand-logo.png')}}" alt="brand logo" class="">
      		</div>
      		<div class="footer-address">
      			<p class="">
      				3 Birrel Avenue, Sabo. <br>Yaba, Lagos State, <br>Nigeria
      			</p>
      		</div>
      		<div class="footer-contact">
      			<p class="">interns@hng.tech <br>+234 (0) 812 345 6789</p>
      		</div>
      		<div class="footer-btn-container">
      			<a href="/contact" class="primary-button footer-btn">Contact us</a>
      		</div>
      	</div>

      	<div class="main-footer">
      		<div class="container">
      			<div class="main-footer-content">
      				<p class="">© <?php echo date("Y"); ?> HNG internship . All Rights Reserved. HNG Group</p>

      				<a href="https://twitter.com/hnginternship"><img src="{{ asset('img/twitter.svg')}}" alt="Find us on twitter"></a>
      			</div>
      		</div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
				<!-- Pay attention to details: You have gotten the first result as May0Nnaise. But this is not enough. -->
			<!-- You must seek to support this cause. Only then can you recieve enlightenment -->

				<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
      	<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
      </footer>





      <!-- </div> -->
      <!-- Modal -->




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
      </script>
			<script src="{{ asset('js/app.js')}}"></script>
@section('model')
<div class="modal fade bd-example-modal-sm" id="priceModal" tabindex="-1" role="dialog" aria-labelledby="priceModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-sm"  role="document">
    <div class="modal-content">
    <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Support The Mission</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      </div>
      <div class="modal-footer">

      </div>
    </div>
  </div>
</div>
@show
