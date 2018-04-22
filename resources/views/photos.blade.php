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
      <img src="/images/springmulch3.jpg" class="image-panel" onclick="openPopup(this)" alt="garden">
      <img src="/images/snowplow3.jpg" class="image-panel" onclick="openPopup(this)" alt="grass">
    </div>

    <div class="column">
      <img src="/images/lawnmower.jpg" class="image-panel" onclick="openPopup(this)" alt="grass">
      <img src="/images/snowplow5.jpg" class="image-panel" onclick="openPopup(this)" alt="grass">
      <img src="/images/grass3.jpg" class="image-panel" onclick="openPopup(this)" alt="grass">
    </div>

    <div class="column">
      <img src="/images/snowplow2.jpg" class="image-panel" onclick="openPopup(this)" alt="grass">
      <img src="/images/drone.jpg" class="image-panel" onclick="openPopup(this)" alt="grass">
      <img src="/images/gardening.jpg" class="image-panel" onclick="openPopup(this)" alt="grass">
    </div>

    <div class="column">
      <img src="/images/snowplow4.jpg" class="image-panel" onclick="openPopup(this)" alt="grass">
      <img src="/images/springmulch2.jpg" class="image-panel" onclick="openPopup(this)" alt="grass">
      <img src="/images/flowersandgrass.jpg" class="image-panel" onclick="openPopup(this)" alt="grass">
    </div>
  </div>


@endsection
