
<?php
  function image ($i) {
    return "background-image: url(/images/$i)";
  }

 ?>


<div class="slideshow-component" id="top">
  <div class="slideshow hero is-fullheight">
    <div class="slide-image hero-body" style="{{ image('grass.jpg') }}">
      <div class="container center-horz title">
        <h1 style="color: white">Commerical and Residential</h1>
      </div>
    </div>
    <div class="slide-image hero-body" style="{{ image('grass2.jpg') }}"></div>
    <div class="slide-image hero-body" style="{{ image('grass3.jpg') }}"></div>
    <div class="slide-image hero-body" style="{{ image('grass4.jpg') }}"></div>
  </div>

  <div class="scroll-continue">
    <a href="#about" class="scrolling"><i class="far fa-angle-double-down"></i></a>
  </div>
</div>
