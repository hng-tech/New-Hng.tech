@extends('layouts.core')
@section('title', 'Hng5-finalists')

@section('content')
@section('nav')
<div class=" jumbotron-fluid">
	<div class="JumbHeaderImg">
      @parent
      <main class="container">
    <header class="hng-finalists-header">
      <h2>Our HNG 5.0 Finalists</h2>
      <h3>Here are our finalists from the just concluded internship</h3>
    </header>
    <section class="hng-track">
      <h1 style="visibility:hidden">Web Developers</h1>
      <h3>Web Developers</h3>
    </section>

    <div class="card-container web-dev-container">

				@foreach ($webs as $web)
        <div class="intern-card">
          <div class="intern-card-inner">
            <div class="intern-card-front">
              <div class="card-image-bg">
                <div class="intern-image">
									@if($web['Image'])
                  <img src="{{ $web['Image'] }}" alt="Intern Image" />
									@else
									<img src="https://via.placeholder.com/150/000000/FFFFFF/?text=HNG_5.0 " alt="Intern Image" />
									@endif
								</div>
                <p>{{ $web['Name'] }}</p>
                <p class="intern-desc">{{ $web['Role'] }}</p>
                <p>{{ $web['Stacks'] }}</p>
              </div>
            </div>
            <div class="intern-card-back">
              <p>{{ $web['Name'] }}</p>
              <p>{{ $web['Role'] }}</p>
              <button><a href="{{ $web['Portfolio'] }}">View Portfolio</a></button>
              <p>{{ $web['Email'] }}</p>
              <div class="social-links">
                <a href="{{ $web['LinkedIn'] }}"><img src="{{ asset('img/linkedin icon.png')}}" alt="social link" title="LinkedIn"></a>
                <a href="{{ $web['GitHub'] }}"><img src="{{ asset('img/github icon.png')}}" alt="social link" title="Github"></a>
                <a href="{{ $web['Twitter'] }}"><img src="{{ asset('img/twitter icon.png')}}" alt="social link" title="Twitter"></a>
              </div>
            </div>
          </div>
        </div>
				@endforeach
    </div>

    <section class="hng-track">
      <h1 class="hng-first-track" style="visibility:hidden">Designers</h1>
      <h3>Designers</h3>
    </section>

    <div class="card-container designers-container">
      @foreach ($designers as $designer)
        <div class="intern-card">
          <div class="intern-card-inner">
            <div class="intern-card-front">
              <div class="card-image-bg">
                <div class="intern-image">
									@if($designer['Image'])
                  <img src="{{ $designer['Image'] }}" alt="Intern Image" />
									@else
									<img src="https://via.placeholder.com/150/000000/FFFFFF/?text=HNG_5.0 " alt="Intern Image" />
									@endif
								</div>
                <p>{{ $designer['Name'] }}</p>
                <p class="intern-desc">{{ $designer['Role'] }}</p>
                <p>{{ $designer['Stacks'] }}</p>
              </div>
            </div>
            <div class="intern-card-back">
              <p>{{ $designer['Name'] }}</p>
              <p>{{ $designer['Role'] }}</p>
              <button><a href="{{ $designer['Portfolio'] }}">View Portfolio</a></button>
              <p>{{ $designer['Email'] }}</p>
              <div class="social-links">
                <a href="{{ $designer['LinkedIn'] }}"><img src="{{ asset('img/linkedin icon.png')}}" alt="social link" title="LinkedIn"></a>
                <a href="{{ $designer['Medium'] }}"><img src="{{ asset('img/medium icon.png')}}" alt="social link" title="Medium"></a>
                <a href="{{ $designer['GitHub'] }}"><img src="{{ asset('img/github icon.png')}}" alt="social link" title="Github"></a>
                <a href="{{ $designer['Twitter'] }}"><img src="{{ asset('img/twitter icon.png')}}" alt="social link" title="Twitter"></a>
                <a href="{{ $designer['Dribbble'] }}"><img src="{{ asset('img/dribbble icon.png')}}" alt="social link" title="Dribbble"></a>
              </div>
            </div>
          </div>
        </div>
      @endforeach
    </div>

    <section class="hng-track">
      <h1 style="visibility:hidden">Mobile Developers</h1>
      <h3>Mobile Developers</h3>
    </section>

    <div class="card-container Mobile-dev-container">
      @foreach ($mobiles as $mobile)
        <div class="intern-card">
          <div class="intern-card-inner">
            <div class="intern-card-front">
              <div class="card-image-bg">
                <div class="intern-image">
									@if($mobile['Image']))
                  <img src="{{ $mobile['Image'] }}" alt="Intern Image" />
									@else
									<img src="https://via.placeholder.com/150/000000/FFFFFF/?text=HNG_5.0 " alt="Intern Image" />
									@endif
								</div>
                <p>{{ $mobile['Name'] }}</p>
                <p class="intern-desc">{{ $mobile['Role'] }}</p>
                <p>{{ $mobile['Stacks'] }}</p>
              </div>
            </div>
            <div class="intern-card-back">
              <p>{{ $mobile['Name'] }}</p>
              <p>{{ $mobile['Role'] }}</p>
              <button><a href="{{ $mobile['Portfolio'] }}">View Portfolio</a></button>
              <p>{{ $mobile['Email'] }}</p>
              <div class="social-links">
                <a href="{{ $mobile['LinkedIn'] }}"><img src="{{ asset('img/linkedin icon.png')}}" alt="social link" title="LinkedIn"></a>
                <a href="{{ $mobile['Medium'] }}"><img src="{{ asset('img/medium icon.png')}}" alt="social link" title="Medium"></a>
                <a href="{{ $mobile['GitHub'] }}"><img src="{{ asset('img/github icon.png')}}" alt="social link" title="Github"></a>
                <a href="{{ $mobile['Twitter'] }}"><img src="{{ asset('img/twitter icon.png')}}" alt="social link" title="Twitter"></a>
                <a href="{{ $mobile['Dribbble'] }}"><img src="{{ asset('img/dribbble icon.png')}}" alt="social link" title="Dribbble"></a>
              </div>
            </div>
          </div>
        </div>
      @endforeach
    </div>

    <section class="hng-track">
      <h1 style="visibility:hidden">Machine Learning</h1>
      <h3>Machine Learning</h3>
    </section>

    <div class="card-container ML-container">
      @foreach ($mls as $ml)
        <div class="intern-card">
          <div class="intern-card-inner">
            <div class="intern-card-front">
              <div class="card-image-bg">
                <div class="intern-image">
									@if($ml['Image'])
                  <img src="{{ $ml['Image'] }}"  alt="Intern Image" />
									@else
									<img src="https://via.placeholder.com/150/000000/FFFFFF/?text=HNG_5.0 " alt="Intern Image" />
									@endif
								</div>
                <p>{{ $ml['Name'] }}</p>
                <p class="intern-desc">{{ $ml['Role'] }}</p>
                <p>{{ $ml['Stacks'] }}</p>
              </div>
            </div>
            <div class="intern-card-back">
              <p>{{ $ml['Name'] }}</p>
              <p>{{ $ml['Role'] }}</p>
              <button><a href="{{ $ml['Portfolio'] }}">View Portfolio</a></button>
              <p>{{ $ml['Email'] }}</p>
              <div class="social-links">
                <a href="{{ $ml['LinkedIn'] }}"><img src="{{ asset('img/linkedin icon.png')}}" alt="social link" title="LinkedIn"></a>
                <a href="{{ $ml['Medium'] }}"><img src="{{ asset('img/medium icon.png')}}" alt="social link" title="Medium"></a>
                <a href="{{ $ml['GitHub'] }}"><img src="{{ asset('img/github icon.png')}}" alt="social link" title="Github"></a>
                <a href="{{ $ml['Twitter'] }}"><img src="{{ asset('img/twitter icon.png')}}" alt="social link" title="Twitter"></a>
              </div>
            </div>
          </div>
        </div>
      @endforeach
    </div>

    <section class="hng-track">
      <h1 style="visibility:hidden">Digital Marketers</h1>
      <h3>Digital Marketers</h3>
    </section>

    <div class="card-container marketers-container">
      @foreach ($marketers as $marketer)
        <div class="intern-card">
          <div class="intern-card-inner">
            <div class="intern-card-front">
              <div class="card-image-bg">
                <div class="intern-image">
									@if($marketer['Image'])
                  <img src="{{ $marketer['Image'] }}"  alt="Intern Image" />
									@else
								  <img src="https://via.placeholder.com/150/000000/FFFFFF/?text=HNG_5.0" alt="Intern Image" />
									@endif
								</div>
                <p>{{ $marketer['Name'] }}</p>
                <p class="intern-desc">{{ $marketer['Role'] }}</p>
                <p>{{ $marketer['Stacks'] }}</p>
              </div>
            </div>
            <div class="intern-card-back">
              <p>{{ $marketer['Name'] }}</p>
              <p>{{ $marketer['Role'] }}</p>
              <button><a href="{{ $marketer['Portfolio'] }}">View Portfolio</a></button>
              <p>{{ $marketer['Email'] }}</p>
              <div class="social-links">
                <a href="{{ $marketer['LinkedIn'] }}"><img src="{{ asset('img/linkedin icon.png')}}" alt="social link" title="LinkedIn"></a>
                <a href="{{ $marketer['Medium'] }}"><img src="{{ asset('img/medium icon.png')}}" alt="social link" title="Medium"></a>
                <a href="{{ $marketer['GitHub'] }}"><img src="{{ asset('img/github icon.png')}}" alt="social link" title="Github"></a>
                <a href="{{ $marketer['Twitter'] }}"><img src="{{ asset('img/twitter icon.png')}}" alt="social link" title="Twitter"></a>
              </div>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </main>
  <div class="ap-footer">
@endsection


@endsection
