@extends('layout')
@section('content')

<div class="slideshow-component" id="top">
  <div class="slideshow hero is-fullheight">
    @foreach(['grass.jpg', 'grass2.jpg', 'grass3.jpg', 'grass4.jpg'] as $image)
    <div class="slide-image" style="background-image: url(/images/{{ $image }})"></div>
    @endforeach
  </div>

  <div class="scroll-continue">
    <a href="#about" class="scrolling"><i class="far fa-angle-double-down"></i></a>
  </div>
</div>

@component('section', [
  'class' => 'is-primary',
  'id' => 'about'
])
<div class="small-sect">
    <h1 class="title">About</h1>
    <p>Quality Cuts is independently owned and operated offering the best lawncare to bot commercial and residential properties. Quality Cuts is registered, insured and certainly qualified to fulfill all of your property maintance needs. Call, email, or
      <a href="/contact">submit a request</a> to set up a fast, free estimate. </p>
</div>
@endcomponent




@component('section', [
  'class' => 'is-danger',
  'id' => 'services'
])
  <div>
    <h1 class="title">Services</h1>
    <ul class="icons">
      <li class="icon-list"><i class="far fa-check"></i><a  class="scrolling" href="#lawnmowing">Lawn Mowing</a></li>
      <li class="icon-list"><i class="far fa-check"></i><a class="scrolling" href="#mulch">Mulch/Stone Delivery</a></li>
      <li class="icon-list"><i class="far fa-check"></i><a class="scrolling" href="#springfall">Spring/Fall clean up</a></li>
      <li class="icon-list"><i class="far fa-check"></i><a class="scrolling" href="#snowremoval">Snow Removal</a></li>
    </ul>
  </div>
@endcomponent


@component('section', [
  'class' => 'is-warning',
  'id' => 'lawnmowing'
])
<h1 class="title">Title</h1>
<h2 class="subtitle">Subtitle</h2>
@endcomponent




@component('section', [
  'class' => 'is-success',
  'id' => 'snowremoval'
])
<h1 class="title">Title</h1>
<h2 class="subtitle">Subtitle</h2>
@endcomponent




@endsection
