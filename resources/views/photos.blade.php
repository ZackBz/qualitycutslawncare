@extends('layout')
@section('content')



<style>
.image-panel {
  margin-bottom: 1rem;
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
</style>
<div id="popup" class="popup-hidden">

</div>

<div id="pc">
  <div class="columns">

    <div class="column" id="column1">
      <img src="/images/gardening.jpg" class="image-panel" onclick="popup(this)">
      <img src="/images/drone.jpg" class="image-panel">
      <img src="/images/grass3.jpg" class="image-panel">
    </div>

    <div class="column">
      <img src="/images/grass.jpg" class="image-panel">
      <img src="/images/gardening.jpg" class="image-panel">
      <img src="/images/grass2.jpg" class="image-panel">
    </div>

    <div class="column">
      <img src="/images/lawnmower.jpg" class="image-panel">
      <img src="/images/drone.jpg" class="image-panel">
      <img src="/images/gardening.jpg" class="image-panel">
    </div>

    <div class="column">
      <img src="/images/drone.jpg" class="panel">
      <img src="/images/grass3.jpg" class="panel">
      <img src="/images/grass2.jpg" class="panel">
    </div>
  </div>
</div>


@endsection
