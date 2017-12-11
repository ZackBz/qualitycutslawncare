<template lang="html">
  <div>
    <slide-show seconds="6" :images="['/images/grass.jpg', '/images/lawnmower.jpg', '/images/grass2.jpg']"/>


    <!-- Half and half RIGHT-->
    <div class="columns" >
      <!-- <div class="column is-three-fifths image is-hidden-touch"></div> -->
        <div class="column is-two-fifths is-hidden-touch parallax" style="background: url('/images/leavesongrass.jpg')"></div>
        <div class="column is-three-fifths is-full-touch text has-text-centered">
          <div id="about-text" class="has-text-left is-inline-block">
            <div class="is-size-1 has-text-weight-bold">About</div>
            <br>
            <p class="is-size-5">We are committed to enhancing our clients’ most important investment by exceeding their lawn service needs with reliability and value. Imagine quality family time, rest and relaxation, and leaving the dirty work up to us. Your business is just as important as ours. Like any other turf, the lawn around your business requires attention and service. Our flexibility and ability to customize a lawn care program for your property allows your business to make a great first impression.</p>
          </div>
          <div class="is-full is-hidden-desktop image" id="about-touch-image" style="background: url('/images/leavesongrass.jpg')"></div>
        </div>
    </div>

    <!-- Full width -->
    <div class="columns">
      <div class="column is-desktop text" style="background-image: url('/images/drone.jpg');">
        <div id="services" class="column is-half">
          <div class="is-size-1 has-text-weight-bold">Services</div>
          <ul class="icons is-size-5">
            <li><i class="far fa-check margin-right-05"></i>WEED CONTROL</li>
            <li><i class="far fa-check margin-right-05"></i>DE-THATCHING</li>
            <li><i class="far fa-check margin-right-05"></i>EDGING</li>
            <li><i class="far fa-check margin-right-05"></i>POWER WASHING</li>
            <li><i class="far fa-check margin-right-05"></i>FERTILIZATION</li>
          </ul>
        </div>
      </div>
    </div>

    <!-- Half and half LEFT -->
      <div class="columns">
        <div class="column is-three-fifths is-full-touch text has-text-centered">
          <div id="landscaping-text" class="has-text-left is-inline-block">
            <div class="is-size-1 has-text-weight-bold">Landscaping</div>
            <br>
            <div class="has-text-weight-bold is-size-4">Flower Bed & Landscaping Maintenance</div>
            <p class="is-size-5">Our goal is to keep any flower beds or landscaping healthy, clean, safe and attractive. Proper care will keep your flowers, shrubs and bushes as fresh as the day you planted them.</p>
            <br>
            <div class="has-text-weight-bold is-size-4">Mulch & Decorative Rock Installation</div>
            <p class="is-size-5">Let us shovel it for you! Take back your weekend and let Dunner's install the mulch or decorative rock of your choice.</p>
          </div>
          <div class="is-full is-hidden-desktop image" style="background: url('/images/gardening2.jpg')"></div>
        </div>
        <div class="column is-two-fifths is-hidden-touch" style="background: url('/images/gardening2.jpg')"></div>
      </div>

      <div class="columns">
        <div class="column text has-text-centered">
          <h1 class="is-size-1 has-text-weight-bold">Spring & Fall Clean Up</h1>
          <div  id="cleanup" class="is-inline-block">
            <p>We have the ability to rake or blow to remove leaves and grass clippings from your lawn, landscaping or flower beds in the spring or fall seasons.</p>
          </div>
        </div>
      </div>


    </div>
  </div>
</template>

<script>
import SlideShow from '~/components/SlideShow.vue'
export default {
  components: {
    SlideShow
  }
}
</script>

<style lang="scss" scoped>
.image { min-height: 40vh;}
.opaque { margin: auto; background: rgba(0,0,0,0.35)}
.columns {
  margin-top: 0;
  margin-bottom: 0;
}
#services {
  color: #fff;
  margin: auto;
  background: rgba(0,0,0,0.45);
  padding: 3rem;
  i {margin-right: 0.5rem}
}
#about-touch-image {
  margin-top: 3rem;
  height: 5rem;
}

#about-text, #landscaping-text {
  max-width: 600px;
  line-height: 2.5rem;
  display: inline-block;
  text-align: left;
}

#cleanup {
  line-height: 2.5rem;
  width: 600px;
}
</style>
