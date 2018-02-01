<?php
  $scrollingclass ="";
  $link = "/";
  if (request()->path() === "/" ) {
    $scrollingclass = "scrolling";
    $link = "";
  }
 ?>
<nav class="navbar is-fixed-top" role="navigation" aria-label="main navigation" ref="navbar">
<div class="navbar-brand brand">
  <a class="navbar-item scrolling" href="#top">
    <h1>Quality Cuts lawn Care</h1>
  </a>

  <div class="navbar-burger" onclick="toggleNavbar()">
    <span></span>
    <span></span>
    <span></span>
  </div>
</div>

<div class="navbar-menu">
  <a href="{{$link}}#top" class="navbar-item {{$scrollingclass}}" >
    Home
  </a>
  <a href="{{$link}}#about" class="navbar-item {{$scrollingclass}}" >
    About
  </a>
  <div  class="navbar-item has-dropdown is-hoverable">
    <div class="navbar-link">
      Services
    </div>
    <div class="navbar-dropdown">
      <a class="navbar-item {{$scrollingclass}}" href="{{$link}}#lawnmowing">
        Lawnmowing
      </a>
      <a class="navbar-item {{$scrollingclass}}" href="{{$link}}#mulch">
        Mulch & Stone Delivery
      </a>
      <a class="navbar-item {{$scrollingclass}}" href="{{$link}}#springfall">
        Spring & Fall Cleanup
      </a>
      <a class="navbar-item {{$scrollingclass}}" href="{{$link}}#snowremoval">
        Snow Removal
      </a>
    </div>
  </div>
  <a href="{{$link}}#contact" class="navbar-item {{$scrollingclass}}" >
    Quote
  </a>
  <a href="/photos" class="navbar-item" >
    Gallery
  </a>

  <a href="https://www.yardbook.com/60767/pay_now" class="navbar-item" >
    Pay Your Bill
  </a>
</div>
</nav>
