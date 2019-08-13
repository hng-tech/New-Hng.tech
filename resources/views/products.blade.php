@extends('layouts.core')
@section('title', 'Products')
@section('content')
@section('nav')
      @parent
      <h1 class="text-center productsHeader" style="margin-bottom: 5rem; font-size: 3.25em;">Products Created by Interns</h1>
      	<div class="container gridContainer">
      		<div class="row center-block">
      			<div class="jumbotron product col-sm-6 col-lg-4 col-lg-offset-2 col-md-4 "  id="productAnime">
      				<img src="https://res.cloudinary.com/dx6ol2ale/image/upload/v1556547608/devalertlogo.jpg" alt="devalert-logo" class="imgCenter center-block" style="width:30%;">
      				<div id="extra">
      					<img src="https://res.cloudinary.com/dx6ol2ale/image/upload/v1556547608/devalertlogo.jpg" alt="devalert-logo" class=" centre-block" style="width:30%; margin:50px 0px 0px 105px;">
      					<p class="text-center detail" >DevAlert is a Platform that provides services for African Software Developers by compiling the list of remote jobs from around the world and curating them for African developers living in the continent.</p>
      					<div class="text-center">
      						<a href="https://devalert.me" target="blank"><button type="button" class="btn btn-custom mr-0">Learn more</button></a>
      					</div>
      				</div>
      			</div>
      			<div class="jumbotron product col-sm-6  col-lg-4  col-lg-offset-1 col-md-4 text-center" id="productAnime">
      				<img src="https://res.cloudinary.com/dx6ol2ale/image/upload/v1556806436/Kidslogo.png" alt="apoe4_logo" class="imgCenter center-block" style="width:50%;">
      				<div id="extra">
      					<img src="https://res.cloudinary.com/dx6ol2ale/image/upload/v1556806436/Kidslogo.png" alt="" class=" centre-block" style="width:50%; margin: 50px 0px 0px 0px;">
      					<p class="text-center detail" >This beautiful short kid stories would help your children sleep peacefully. A great resource for parents, babysitters, aunts, uncles, grandparents, or anyone in love with classic bedtime stories.</p>
      					<div class="text-center">
      						<a href="https://kidstories.app" target="blank"><button type="button" class="btn btn-custom mr-0">Learn more</button></a>
      					</div>
      				</div>
      			</div>
      		</div>
      		<div class="row center-block">
      			<div class="jumbotron product col-sm-6  col-lg-4  col-lg-offset-2 col-md-4 text-center" id="productAnime">
      				<img src="{{ asset('img/lucid.png')}}" alt="Lucid-logo-color" class="imgCenter center-block" style="width:80%;">
      				<div id="extra">
      					<img src="{{ asset('img/lucidwhite.png')}}" alt="Lucid-logo-white" class=" centre-block" style="width:50%; margin:50px 0px 0px 75px;">
      					<p class="text-center detail">
      					The Ultimate LightWeight Content Platform. LUCID was built on the premise that ownership and privacy is about respect and that it is your right.</p>
      					<div class="text-center">
      						<a href="https://lucid.blog/" target="blank"><button type="button" class="btn btn-custom mr-0">Learn more</button></a>
      					</div>
      				</div>
      			</div>
      			<!-- <div class="jumbotron product col-sm-6 col-lg-4 col-lg-offset-1 col-md-4 "  id="productAnime">
      				<img src="https://res.cloudinary.com/dx6ol2ale/image/upload/v1556545120/apoe_logo.png" alt="apoe4_logo" class="imgCenter center-block" style="width:50%;">
      				<div id="extra">
      					<img src="https://res.cloudinary.com/dx6ol2ale/image/upload/v1557018690/apoewhite.png" alt="apoe4_logo" class=" centre-block" style="width:50%; margin:50px 0px 0px 75px;">
      					<p class="text-center detail" >An innovative app that helps people with history of Apoe4 gene that are culpable to Alhzemier. This product helps users monitor their daily activities and provide tips from our medical researchers.</p>
      					<div class="text-center">
      						<a href="https://apoe4.app" target="blank"><button type="button" class="btn btn-custom mr-0">Learn more</button></a>
      					</div>
      				</div>
      			</div> -->
      		</div>
      	</div>
@endsection


@endsection
