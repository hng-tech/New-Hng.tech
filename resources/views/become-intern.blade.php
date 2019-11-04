@extends('layouts.core')
@section('title', 'become-intern')
@section('content')
@section('nav')
    @parent



    <div class="container">
    			<div class="row bi-header">
    				<div class="col-md-7 bi-header-images">
    					<div class="bi-header-image1">
    						<img src="{{ asset('img/become-intern/female-phone.jpg')}}" alt="lady with phone" >
    						<a class="primary-button bi-learn-btn" href="#learn-more">
    							LEARN MORE
    							<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
    							<path d="M19.414 27.414l10-10c0.781-0.781 0.781-2.047 0-2.828l-10-10c-0.781-0.781-2.047-0.781-2.828 0s-0.781 2.047 0 2.828l6.586 6.586h-19.172c-1.105 0-2 0.895-2 2s0.895 2 2 2h19.172l-6.586 6.586c-0.39 0.39-0.586 0.902-0.586 1.414s0.195 1.024 0.586 1.414c0.781 0.781 2.047 0.781 2.828 0z" fill="#ffffff"></path>
    							</svg>
    						</a>
    					</div>
    					<div class="bi-header-image2">
    						<img src="{{ asset('img/become-intern/male-laptop.jpg')}}" alt="Male with laptop">
    					</div>
    				</div>

    				<div class="col-md-5 bi-header-text">
    					<h1 class="hng-title">The HNG Internship</h1>
    					<h2 class="hp-subheader">Become an Intern.</h2>
    					<p class="hp-header-text">Learn, grow and scale your software developer career with real world experience.</p>
    					<p class="hp-header-text"> The HNG Internship 6 starts on September 15, 2019. <br> Click on the link below to join the internship now.</p>
    					<br>
    					<a class="bi-btn primary-button" href="https://clip.ng/7MV6" target="_blank">Join now</a><br><br>
    					<!-- <a class="bi-btn primary-button" href="join-now" target="_blank">Join now</a><br><br> -->
    				</div>
    			</div>
    		</div>
    		<div class="bi-tracks" id="learn-more">
    			<div class="container">
    				<div class="text-center bi-tracks-heading">
    					<h3 class="" >Available Learning Tracks</h3>
    					<p class="" >The HNG Internship does not earn any money. We raise money and pay the interns all the money we raise on each internship.</p>
    				</div>
    				<div class="row bi-tracks-flex bi-tracks-slick">
    					<div class="">
    						<div class="bi-track">
    							<img src="{{ asset('img/design.svg')}}" class="img-icon">
    							<h4>UI/UX Design</h4>
    							<p class="i">Put your UX/UI Design skills to test and sharpen it as you design exciting User Interfaces for great User Experience.</p>
    						</div>
    					</div>
    					<div class="">
    						<div class="bi-track">
    							<img src="{{ asset('img/frontend.svg')}}" class="img-icon">
    							<h4>Frontend</h4>
    							<p>Put your Frontend skills to test and sharpen it further as you turn exciting UI Designs into stunning web pages.</p>
    						</div>
    					</div>
    					<div class="">
    						<div class="bi-track">
    							<img src="{{ asset('img/backend.svg')}}" class="img-icon">
    							<h4>Backend</h4>
    							<p>Put your Backend skills to test and sharpen it by building scalable, logic driven applications with world class technologies.</p>
    						</div>
    					</div>
    					<div class="">
    						<div class="bi-track">
    							<img src="{{ asset('img/product.svg')}}" class="img-icon">
    							<h4>Machine Learning</h4>
    							<p>Develop programs that can access data and utilize it to automatically learn and improve from experience.</p>
    						</div>
    					</div>
    				</div>
    			</div>
    		</div>
    		<div class="bi-stats">
    			<div class="container bi-stats-container">
    				<div class="row bi-stats-row">
    					<div class="bi-stats-numbers">
    						<div class="count-text col-md-3">
    							<p class="h4 bi-stats-interns">300 <br> interns</p>
    							<p class="bi-stats-batch">BATCH 1</p>
    						</div>
    						<div class="count-text col-md-3">
    							<p class="h4 bi-stats-interns">2,000 <br>interns</p>
    							<p class="bi-stats-batch">BATCH 2</p>
    						</div>
    						<div class="count-text col-md-3">
    							<p class="h4 bi-stats-interns">3,000 <br>interns</p>
    							<p class="bi-stats-batch">BATCH 3</p>
    						</div>
    						<div class="count-text col-md-3">
    							<p class="h4 bi-stats-interns">4,000 <br>interns</p>
    							<p class="bi-stats-batch">BATCH 4</p>
    						</div>
    						<div class="count-text col-md-3">
    							<p class="h4 bi-stats-interns">5,700 <br>interns</p>
    							<p class="bi-stats-batch">BATCH 5</p>
    						</div>
    					</div>
    					<div class="bi-stats-infos">
    						<div class="bi-stats-info">
    							<img src="{{ asset('img/per.svg')}}" class="">
    							<p class="bi-stats-caption">Percentage of interns that get employed right after the Program</p>
    							<p class="">The HNG Internship does not earn any money. We raise money and pay the interns all the money we raise on each internship. </p>
    							<p class="bi-stats-vl">
    								<svg width="2" height="85" class="line-svg" viewBox="0 0 2 85" fill="" xmlns="http://www.w3.org/2000/svg">
    								<path d="M1 0V85" stroke="#00AEFF" stroke-width="2"/>
    								</svg>
    							</p>
    							<div class="bi-stats-twitter">
    								<p class="">See what our interns say on twitter</p>
    								<div class="bi-stats-icon">
    									<a href="https://twitter.com/hnginternship">
    									<img src="{{ asset('img/twitter-white.svg')}}"/>
    									</a>
    								</div>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>

    		</div>
    		<div class="">
    			<div class="container">
    				<div class="row bi-others">
    					<div class="pic-text">
    					<p class="pic">
    						You can support in multiple ways - the most important way is to take on one of our interns in your organisation. Outside of that, you can co-finance an internship.
    					</p>
    					</div>
    					<div class="bi-others-img">
    						<img src="{{ asset('img/become-intern/interns4.jpg')}}">
    					</div>
    				</div>
    			</div>
    		</div>
    		<div class="bi-join">
    			<div class="container bi-join-container">
    				<div class="">
    					<p class="h3 last-text1">Get started on your tech career</p>
    					<p class="bi-join-info">The HNG Internship 6.0 starts in September. Click on this link to join now.</p>
    					<a class="bi-btn primary-button" href="https://clip.ng/7MV6" target="_blank">Join now</a><br><br>
    					<!-- <a class="bi-btn primary-button" href="join-now">Join now</a> -->
    				</div>

    			</div>
    			<!-- <div class="container">
    				<div class="bi-inline">
    					<p class=""> You could also invite a friend. Click on this button to do that</p>
    					<button class="bi-btn primary-button" id="invite"> Invite</button>
    				</div>
    			</div> -->
    		</div>

    @endsection
	</body>
	<!-- Modal -->


  @section('modal')

@endsection

@endsection
