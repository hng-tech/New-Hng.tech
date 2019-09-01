@extends('layouts.core')
@section('title', 'About')

@section('content')
@section('nav')
<body class="pi">
	<style>
	.intern-img {
	  object-fit: cover;
	  filter: gray;
	  -webkit-filter: grayscale(1);
	  filter: grayscale(1);
	}
	</style>
	<div class="container intern-body">
    @parent
@endsection

        <!-- Header -->
        <header class="head">

            <h3>Our Past Interns</h3>
            <h5>Our Interns and the Impact They Have Made</h5>

        </header>




       <div class="e-company row inters">

	 @foreach($companies as $company)
        <div class='each-company'>
					<div class='company'>
						<p>{{ $company->about }}</p>
						<div class='logo-container'>
							<img src='{{ $company->logo }}' alt='{{ $company->name }} logo'>
						</div>
					</div>
					<div class='inters'>
						@foreach($interns as $intern)
							@if($intern->company == $company->name)
								<div class='intern'>
									<img class='card-img-top intern-img' src='{{ $intern->picture }}' alt='Card image cap'>
									<p class='name'>{{ $intern->name }}</p>
									<p class='stack'>{{ $intern->stack }}<br />{{ $intern->role }} @<a style='font-size: 12px' href='{{ $intern->company_url }}'>{{ $intern->company }}</a>
									</p>
								</div>
							@endif
						@endforeach

					</div>
				</div>
			@endforeach

        </div>


        <div class="other-interns">
        @foreach($interns as $intern)
		                @if($intern->company == "")
		                    <div class='intern' ><img class='card-img-top intern-img' src='{{ $intern->picture }}' alt='Card image cap'><p class='name'>{{ $intern->name }}</p>
		                    <p class='stack'>{{ $intern->stack }}<br />{{ $intern->role }} </p></div>
		                    @endif
		                @endforeach

        </div>

    </div>
    @endsection
