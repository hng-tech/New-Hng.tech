@extends('layouts.core')
@section('title', 'The HNG Internship')
@section('content')
@section('nav')
<div class="hp-jumbotron no-scroll">
    @parent


@endsection

      <div class="container hp-container">
          <div class="row">
              <div class="col-md-6 hp-jumbotron-text">
                  <h1 class="hp-header text-left">The HNG Internship</h1>
                  <h3 class="hp-subheader text-left"><strong>Perfection is always under construction</strong></h1>
                  <p class="hp-header-text text-left">The HNG Internship is an ambitious attempt to change the way education is done in Africa.
                  It’s the bridge between learning to code, and becoming the best in the world.</p>
              </div>
          </div>

      </div>
          <!-- Toon characters-->
      <div class="hp-floor">
          <div class="container">
              <div class="row hp-images">
                  <div class="col-md-6 hp-intern">
                      <img class="hp-intern-image" src="{{ asset('img/intern-welcome.svg')}}" alt="Image of intern">
                  </div>

                  <div class="col-md-6 hp-office text-right">
                      <img class="hp-office-image" src="{{ asset('img/office-setting.svg')}}" alt="Image of Office">
                  </div>
              </div>
          </div>
          <div class="">
              <img src="{{ asset('img/floor.svg')}}" width="100%" height="">
          </div>
      </div>
          <!--floor-->
  </div>
@endsection
