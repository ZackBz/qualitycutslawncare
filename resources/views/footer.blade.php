<?php
  $scrollingclass ="";
  $link = "/";
  if (request()->path() === "/" ) {
    $scrollingclass = "scrolling";
    $link = "";
  }
 ?>
<footer id="footer">
  <div class="wrapper">

    <div class="footer-column">
      <h2 class="is-size-4">Social Media</h2>
      <a href="#" class="item"><i class="fab fa-facebook"></i><span>Facebook</span></a>
      <a href="#" class="item"><i class="fab fa-twitter"></i><span>Twitter</span></a>
      <a href="#" class="item"><i class="fab fa-instagram"></i><span>Instagram</span></a>
    </div>

    <div class="footer-column">
      <h2 class="is-size-4">Contact</h2>
      <a href="tel:+{{ env('CONTACT_TEL') }}" class="item"><i class="fas fa-phone"></i><span>Call me</span></a>
      <a href="mailto:{{ env('CONTACT_EMAIL') }}?subject=Business%20Inquiry" class="item"><i class="fas fa-envelope"></i><span>Email me</span></a>
      <!-- <a href="mailto:zackbaldwin148@gmail.com" class="item"><i class="far fa-envelope"></i><span>Email me</span></a> -->
  </div>

    <div class="footer-column">
      <h2 class="is-size-4">Links</h2>
      <a href="{{$link}}#about" class="item"><i class="fas fa-info-circle"></i><span>About</span></a>
      <a href="{{$link}}#lawnmowing" class="item"><i class="fas fa-link"></i><span>Lawn Mowing</span></a>
      <a href="{{$link}}#mulch" class="item"><i class="fas fa-link"></i><span>Mulch & Stone</span></a>
      <a href="{{$link}}#springfall" class="item"><i class="fas fa-link"></i><span>Spring & Fall Cleanup</span></a>
      <a href="{{$link}}#snowremoval" class="item"><i class="fas fa-link"></i><span>Snow Removal</span></a>
      <a href="/photos" class="item"><i class="fas fa-images"></i><span>Gallery</span></a>
      <a href="https://www.yardbook.com/60767/pay_now" class="item"><i class="fas fa-credit-card"></i><span>Pay Your bill</span></a>
    </div>



</footer>
