<template lang="html">
  <div>
    <slide-show seconds="6" :images="['/images/grass.jpg', '/images/lawnmower.jpg', '/images/grass2.jpg']"/>

    <div class="columns" >
      <!-- <div class="column is-three-fifths image is-hidden-touch"></div> -->

        <div class="column is-two-fifths is-hidden-touch parallax" style="background: url('/images/leavesongrass.jpg')"></div>
        <div class="column is-three-fifths is-full-touch text center">
          <div class="is-size-2 has-text-weight-bold">About</div>
          <p class="is-size-5 max">We are committed to enhancing our clients’ most important investment by exceeding their lawn service needs with reliability and value. Imagine quality family time, rest and relaxation, and leaving the dirty work up to us. Your business is just as important as ours. Like any other turf, the lawn around your business requires attention and service. Our flexibility and ability to customize a lawn care program for your property allows your business to make a great first impression.</p>
          <div class="is-full is-hidden-desktop image" id="about-touch-image" style="background: url('/images/leavesongrass.jpg')"></div>
        </div>
    </div>

    <div class="columns">
      <div class="column is-desktop text" style="background-image: url('/images/drone.jpg');">
        <div id="services" class="column is-half">
          <div class="is-size-2 has-text-weight-bold">Services</div>
          <ul class="icons is-size-5">
            <li><i class="far fa-check margin-right-05"></i>WEED CONTROL</li>
            <li><i class="far fa-check margin-right-05"></i>DE-ThATCHING</li>
            <li><i class="far fa-check margin-right-05"></i>EDGING</li>
            <li><i class="far fa-check margin-right-05"></i>POWER WASHING</li>
            <li><i class="far fa-check margin-right-05"></i>FERTILIZATION</li>
          </ul>
        </div>
      </div>
    </div>

      <div class="columns">
        <div class="column is-three-fifths is-full-touch text">
          <div class="is-size-2 has-text-weight-bold">section</div>
          <p class="is-size-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

          <div class="is-full is-hidden-desktop image" style="background: url('/images/leavesongrass.jpg')"></div>
        </div>
        <div class="column is-two-fifths is-hidden-touch" style="background: url('/images/leavesongrass.jpg')"></div>
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

.max {
  max-width: 300px;
}
</style>
