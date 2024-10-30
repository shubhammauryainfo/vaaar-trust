@extends('_layouts.main')

@section('body')
@include('_layouts.partials.header')
{{-- slider --}}
<div class="carousel rounded-box">
    <div class="carousel-item">
      <img
        src="{{$page->baseUrl}}/assets/images/intro/1.jpg"
        alt="Burger" />
    </div>
    <div class="carousel-item">
      <img
        src="{{$page->baseUrl}}/assets/images/intro/2.jpg"
        alt="Burger" />
    </div>
    <div class="carousel-item">
      <img
        src="{{$page->baseUrl}}/assets/images/intro/3.jpg"
        alt="Burger" />
    </div>
    <div class="carousel-item">
      <img
        src="{{$page->baseUrl}}/assets/images/intro/4.jpg"
        alt="Burger" />
    </div>
    <div class="carousel-item">
      <img
        src="{{$page->baseUrl}}/assets/images/intro/5.jpg"
        alt="Burger" />
    </div>
  

  </div>


    {{-- @include('_layouts.partials.footer') --}}
@endsection
