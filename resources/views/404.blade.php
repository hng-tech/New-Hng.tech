@extends('layouts.core')
@section('title', '404')
@section('content')
@section('nav')
<div class="error-page">
      @parent
      <div class="container error-page-container">
                    <a class="error-page-btn" href="/">Go Home</a>
                </div>
  </div>
@endsection


@endsection
