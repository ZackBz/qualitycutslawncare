@extends('layout')
@section('content')



<style>
.image-panel {
  margin-bottom: 1rem;
  cursor: pointer;
}
#popup {
  position: fixed;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  display: flex;
  justify-content: center;
  align-items: center;
}
#popup.popup-hidden {
  display: none;
}
#background-transparent {
  position: fixed;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    background: #000;
    opacity: 0.7;
    z-index: -1;
    cursor: pointer;
}
#image-holder {
    max-width: 960px;
}
#close-button {
  position: fixed;
  right: 3rem;
  top: 5rem;
  color: white;
  z-index: 1;
  font-size: 3rem;
  cursor: pointer;
}
.column {
  padding: 0 0.75rem;
}
</style>
<div id="popup" class="popup-hidden">
  <div id="background-transparent" onclick="closePopup()"></div>
  <div id="close-button" onclick="closePopup()"><i class="fal fa-times"></i></div>
  <div id="image-holder"></div>
</div>


  <div class="columns">

    <div class="column">
      <img src="/images/gardening.jpg" class="image-panel" onclick="openPopup(this)">
      <img src="/images/drone.jpg" class="image-panel" onclick="openPopup(this)">
      <img src="/images/grass3.jpg" class="image-panel" onclick="openPopup(this)">
    </div>

    <div class="column">
      <img src="/images/grass.jpg" class="image-panel" onclick="openPopup(this)">
      <img src="/images/gardening.jpg" class="image-panel" onclick="openPopup(this)">
      <img src="/images/grass2.jpg" class="image-panel" onclick="openPopup(this)">
    </div>

    <div class="column">
      <img src="/images/lawnmower.jpg" class="image-panel" onclick="openPopup(this)">
      <img src="/images/drone.jpg" class="image-panel" onclick="openPopup(this)">
      <img src="/images/gardening.jpg" class="image-panel" onclick="openPopup(this)">
    </div>

    <div class="column">
      <img src="/images/drone.jpg" class="image-panel" onclick="openPopup(this)">
      <img src="/images/grass3.jpg" class="image-panel" onclick="openPopup(this)">
      <img src="/images/grass2.jpg" class="image-panel" onclick="openPopup(this)">
    </div>
  </div>


@endsection
