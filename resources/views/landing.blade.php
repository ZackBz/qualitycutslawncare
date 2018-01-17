@extends('layout')
@section('content')

@include('slideshow')

@component('section', [
  'class' => 'is-dark skew-left',
  'id' => 'about'
])
<div class="small-sect">
    <h1 class="title">About</h1>
    <p>Quality Cuts is independently owned and operated offering the best lawncare to bot commercial and residential properties. Quality Cuts is registered, insured and certainly qualified to fulfill all of your property maintance needs. Call, email, or
      <a href="#contact" class="scrolling">submit a request</a> to set up a fast, free estimate. </p>
</div>
@endcomponent





@component('section', [
  'class' => 'is-success skew-right',
  'id' => 'lawnmowing'
])
<div class="small-sect">
<h1 class="title">Lawnmowing</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</div>
@endcomponent


@component('section', [
  'class' => 'skew-right',
  'id' => 'mulch'
])
<div class="small-sect">
<h1 class="title">Mulch/Stone Delivery</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</div>

@endcomponent

@component('section', [
  'class' => 'is-success skew-left',
  'id' => 'springfall'
])
<div class="small-sect">
<h1 class="title">Spring & Fall Cleanup</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</div>

@endcomponent



@component('section', [
  'class' => 'skew-right',
  'id' => 'snowremoval'
])
<div class="small-sect">
<h1 class="title">Snow Removal</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</div>

@endcomponent




@component('section', [
  'class' => 'is-dark skew-right',
  'id' => 'contact'
])
@include('contact')
@endcomponent



@endsection
