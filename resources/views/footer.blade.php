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
      @if (!empty(Config::get('social')))
        @foreach(Config::get('social') as $site => $link)
          @if (!empty($link))
            <a href="{{ $link }}" target="_blank" class="item"><i class="fab fa-{{ strToLower($site) }}"></i><span>{{ $site }}</span></a>
          @endif
        @endforeach
      @endif
    </div>

    <div class="footer-column">
      <h2 class="is-size-4">Contact</h2>
      <h1 class="is-size-4">Hunter</h1>
      <a href="tel:+{{ env('CONTACT_TEL') }}" class="item">
        <i class="fas fa-phone"></i>
        <span>{{ env('CONTACT_TEL') }}</span>
      </a>
      <a href="mailto:{{ env('CONTACT_EMAIL') }}?subject=Business%20Inquiry" class="item">
        <i class="fas fa-envelope"></i>
        <span>Email me</span>
      </a>
    </div>

    <div class="footer-column">
      <h2 class="is-size-4">Links</h2>
      <a href="{{$link}}#about" class="item">
        <i class="fas fa-info-circle"></i>
        <span>About</span>
      </a>
      <a href="{{$link}}#lawnmowing" class="item">
        <i class="fas fa-link"></i>
        <span>Lawn Mowing</span>
      </a>
      <a href="{{$link}}#mulch" class="item">
        <i class="fas fa-link"></i>
        <span>Mulch & Stone</span>
      </a>
      <a href="{{$link}}#springfall" class="item">
        <i class="fas fa-link"></i>
        <span>Spring & Fall Cleanup</span>
      </a>
      <a href="{{$link}}#snowremoval" class="item">
        <i class="fas fa-link"></i>
        <span>Snow Removal</span>
      </a>
      <a href="/photos" class="item">
        <i class="fas fa-images"></i>
        <span>Gallery</span>
      </a>
      <a href="https://www.yardbook.com/60767/pay_now" class="item">
        <i class="fas fa-credit-card"></i>
        <span>Pay Your bill</span>
      </a>
    </div>

  </div>
</footer>
