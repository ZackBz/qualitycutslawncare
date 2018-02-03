@extends('layout')
@section('content')

<div id="popup" class="popup-hidden">
  <div id="background-transparent" onclick="closePopup()"></div>
  <div id="close-button" onclick="closePopup()"><i class="fal fa-times"></i></div>
  <div id="image-holder"></div>
</div>


  <div class="columns">

    <div class="column">
      <img src="/images/gardening.jpg" class="image-panel" onclick="openPopup(this)" alt="garden">
      <img src="/images/drone.jpg" class="image-panel" onclick="openPopup(this)" alt="garden">
      <img src="/images/grass3.jpg" class="image-panel" onclick="openPopup(this)" alt="grass">
    </div>

    <div class="column">
      <img src="/images/grass.jpg" class="image-panel" onclick="openPopup(this)" alt="grass">
      <img src="/images/gardening.jpg" class="image-panel" onclick="openPopup(this)" alt="garden">
      <img src="/images/grass2.jpg" class="image-panel" onclick="openPopup(this)" alt="grass">
    </div>

    <div class="column">
      <img src="/images/lawnmower.jpg" class="image-panel" onclick="openPopup(this)" alt="lawn mower">
      <img src="/images/drone.jpg" class="image-panel" onclick="openPopup(this)" alt="garden">
      <img src="/images/gardening.jpg" class="image-panel" onclick="openPopup(this)" alt="garden">
    </div>

    <div class="column">
      <img src="/images/drone.jpg" class="image-panel" onclick="openPopup(this)" alt="garden">
      <img src="/images/grass3.jpg" class="image-panel" onclick="openPopup(this)" alt="grass">
      <img src="/images/grass2.jpg" class="image-panel" onclick="openPopup(this)" alt="grass">
    </div>
  </div>


@endsection
