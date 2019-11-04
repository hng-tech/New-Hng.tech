@extends('layouts.core')
@section('title', 'Support')
@section('content')
@section('nav')
      @parent
      <div class="container sp-heading-container">
      			<h1 class="sp-heading">Support the Mission</h1>
      		</div>
      		<div class="sp-intro">
      			<div class="container">
      				<div class="row">
      					<article class="col-md-7">
      						<h2 class="hng-title">The HNG Internship</h2>
      						<blockquote class="sp-intro-quote">
      						“the interns use this money to finance their participation in the internship”
      						</blockquote>
      						<p class="sp-intro-text">The HNG Internship does not earn any money. We raise money and pay the interns all the money we raise on each internship. The interns use this money to finance their participation in the internship. You can support in multiple ways - the most important way is to take on one of our interns in your organisation.
      						<br><br>  Outside of that, you can co-finance an internship. We will use your product as part of the internship then (it’s good to have your product in front of 4,000 learning developers), and probably be the first tool they ever use.
      						<br><br>  Or you can just contribute directly (we are a non-profit and tax deductable). We have two addresses you can contribute to - For Everyone or Female-Only.”</p>
      					</article>
      					<div class="col-md-5">
      						<img class="sp-intro-img" src="{{ asset('img/support/intro.png')}}" />
      						<a class="sp-btn primary-button" href="{{ asset('download/HNGInternship5_PitchDeck-min.pdf')}}" download> Download Deck</a>
      					</div>
      				</div>
      			</div>
      		</div>

      		<section class="sp-contribute">
      			<div class="container">
      				<div class="row sp-contribute-row">
      					<div class="col-md-3 col-xs-12">
      						<p class=" sp-contribute-header">Want to contribute?</p>
      <!-- 			You have arrived at the truth. In supporting others, you have attained the final result: OrrnaGe			 -->
      						<p class="sp-contribute-subheader">The HNG Internship does not earn any money.</p>
      					</div>
      					<div class="col-md-3 col-xs-6">
      						<div class="sp-contribute-box stripe-payment" >
      							<div class="sp-contribute-img">
      								<a href="https://rave.flutterwave.com/pay/hngtechltd3tcl"><img src="https://flutterwave.com/wp-content/uploads/2018/07/FLW-logo.svg" alt="stripe" ></a>
      							</div>
      							<h6 class="sp-contribute-text" style="cursor: pointer">Support the Internship.</h6>

      							<!-- <div class="sp-contribute-arrow">
      								<svg width="37" height="24" viewBox="0 0 37 24" fill="none" xmlns="http://www.w3.org/2000/svg">
      									<path d="M23 22L34 12M34 12L23 2M34 12H0" stroke="#00AEFF" stroke-width="4"/>
      								</svg>
      							</div> -->

      						</div>
      					</div>
      					<!-- <div class="col-md-3 col-xs-6">
      						<div class="sp-contribute-box paystack-payment">
      							<div class="sp-contribute-img">
      								<img src="{{ asset('img/paystack.svg')}}" alt="paystack" class="">
      							</div>
      							<h6 class="sp-contribute-text" >Support the Internship and pay with Paystack.</h6>
      							<div class="sp-contribute-arrow">
      								<svg width="37" height="24" viewBox="0 0 37 24" fill="none" xmlns="http://www.w3.org/2000/svg">
      									<path d="M23 22L34 12M34 12L23 2M34 12H0" stroke="#00AEFF" stroke-width="4"/>
      								</svg>
      							</div>
      						</div>
      					</div> -->
      					<!-- <div class="col-md-3 col-xs-6">
      						<div class="sp-contribute-box">
      							<div class="sp-contribute-img">
      								<img src="{{ asset('img/coin.svg')}}" alt="HNG coin" class="">
      							</div>
      							<h6 class="sp-contribute-text">We also accept support using the HNG Coin.</h6>
      							<div class="sp-contribute-arrow">
      								<svg width="37" height="24" viewBox="0 0 37 24" fill="none" xmlns="http://www.w3.org/2000/svg">
      									<path d="M23 22L34 12M34 12L23 2M34 12H0" stroke="#00AEFF" stroke-width="4"/>
      								</svg>
      							</div>
      						</div>
      					</div> -->
      				</div>
      			</div>
      		</section>

      		<section class="sp-sponsor">
      			<div class="container">
      				<h3 class="h2 sp-sponsor-heading">Sponsor underrepresented groups</h3>
      				<div class="row">
      					<div class="col-md-6 col-xs-12">
      						<img src="{{ asset('img/woman-dot.png')}}">
      					</div>
      					<div class="col-md-6 col-xs-12 sp-sponsor-groups">
      						<div class="sp-sponsor-group">
      							<img src="{{ asset('img/fem.svg')}}" alt="1" class="sp-sponsor-icon">
      							<div>
      								<p><strong>Female Developers and Designers</strong></p>
      								<p>The HNG Internship does not earn any money. We raise money and pay the interns all the money we raise on each internship.</p>
      								<button class="sp-sponsor-btn" data-toggle="modal" data-target="#priceModal"><img src="{{ asset('img/arrow-circle.svg')}}"> Get started</button>
      							</div>
      						</div>
      						<div class="sp-sponsor-group">
      							<img src="{{ asset('img/user-interface.svg')}}" alt="2" class="sp-sponsor-icon">
      							<div>
      								<p><strong>User Interface Designers</strong></p>
      								<p>The HNG Internship does not earn any money. We raise money and pay the interns all the money we raise on each internship.</p>
      								<button class="sp-sponsor-btn" data-toggle="modal" data-target="#priceModal"><img src="{{ asset('img/arrow-circle.svg')}}"> Get started</button>
      							</div>
      						</div>
      						<div class="sp-sponsor-group">
      							<img src="{{ asset('img/tools.svg')}}" alt="3" class="sp-sponsor-icon">
      							<div>
      								<p><strong>Sponsor via software or tool</strong></h4>
      								<p>The HNG Internship does not earn any money. We raise money and pay the interns all the money we raise on each internship.</p>
      								<button class="sp-sponsor-btn" data-toggle="modal" data-target="#priceModal"><img src="{{ asset('img/arrow-circle.svg')}}"> Get started</button>
      							</div>
      						</div>
      					</div>
      				</div>
      			</div>
      		</section>

      		<section class="sp-partners">
      			<div class="container">
      				<div class="sp-partners-heading">
      					<p class="h2">Helping thousands of interns realize their tech careers paths</p><br>
      					<p class="sp-partners-text">The HNG Internship does not earn any money. We raise money and pay the interns all the money we raise on each internship. The interns use this money to finance their participation in the internship.</p>
      				</div>
      				<div class="sp-partners-container">
      					<div class=""><img src="{{ asset('img/hng.svg')}}" style="width:150px;"></div>
      					<div class=""><img src="{{ asset('img/akwa-ibom.png')}}" style="width:95px;"></div>
      					<div class=""><img src="{{ asset('img/imo-logo.png')}}" style="width:95px;"></div>
      					<div class=""><img src="{{ asset('img/oracle.svg')}}"></div>
      					<div class=""><img src="{{ asset('img/figma.svg')}}" ></div>
      					<div class=""><img src="{{ asset('img/bluechip.svg')}}"></div>
      					<div class=""><img src="{{ asset('img/flutterwave.png')}}" style="width:160px;"></div>
      					<div class=""><img src="{{ asset('img/verifi_logo.svg')}}" style="width:100px;"></div>
      				</div>
      			</div>
      		</section>
@endsection
@include('layouts.modal')
<script src="https://checkout.stripe.com/checkout.js"></script>
<script src="https://js.paystack.co/v1/inline.js"></script>


@endsection
