@extends('layout')
@section('content')

<div id="popup" class="popup-hidden">
  <div id="background-transparent" onclick="closePopup()"></div>
  <div id="close-button" onclick="closePopup()"><i class="fal fa-times"></i></div>
  <div id="arrow">
    <i id="arrow-left" class="fas fa-chevron-left" onclick="arrowLeft()"></i>
    <div id="image-holder"></div>
    <i id="arrow-right" class="fas fa-chevron-right" onclick="arrowRight()"></i>
  </div>
</div>


  <div class="columns">

    <div class="column">
      <img src="/images/snowplow1.jpg" class="image-panel" onclick="openPopup(this)" alt="garden">
      <img src="/images/qclcspringmulch3.jpg" class="image-panel" onclick="openPopup(this)" alt="garden">
      <img src="/images/snowplow3.jpg" class="image-panel" onclick="openPopup(this)" alt="grass">
    </div>

    <div class="column">
      <img src="/images/qclctruck.png" class="image-panel" onclick="openPopup(this)" alt="grass">
      <img src="/images/snowplow5.jpg" class="image-panel" onclick="openPopup(this)" alt="grass">
      <img src="/images/qclclawnmower.png" class="image-panel" onclick="openPopup(this)" alt="grass">
    </div>

    <div class="column">
      <img src="/images/snowplow2.jpg" class="image-panel" onclick="openPopup(this)" alt="grass">
      <img src="/images/qclctrim.png" class="image-panel" onclick="openPopup(this)" alt="grass">
      <img src="/images/qclctrim2.png" class="image-panel" onclick="openPopup(this)" alt="grass">
    </div>

    <div class="column">
      <img src="/images/snowplow4.jpg" class="image-panel" onclick="openPopup(this)" alt="grass">
      <img src="/images/qclcspringmulch2.jpg" class="image-panel" onclick="openPopup(this)" alt="grass">
      <img src="/images/qclctrim3.png" class="image-panel" onclick="openPopup(this)" alt="grass">
    </div>

    <div class="column">
      <img src="/images/qclctrim4.png" class="image-panel" onclick="openPopup(this)" alt="grass">
      <img src="/images/qclctrim5.png" class="image-panel" onclick="openPopup(this)" alt="grass">
      <img src="/images/drone.jpg" class="image-panel" onclick="openPopup(this)" alt="grass">
    </div>

    <div class="column">
      <img src="/images/qclctrim6.png" class="image-panel" onclick="openPopup(this)" alt="grass">
      <img src="/images/qclctrim7.png" class="image-panel" onclick="openPopup(this)" alt="grass">
      <img src="/images/qclctrim8.png" class="image-panel" onclick="openPopup(this)" alt="grass">
    </div>
  </div>

<!-- if you see this you are hacker man -->

@endsection
