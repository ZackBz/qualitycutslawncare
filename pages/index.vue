<template lang="html">
  <div>
    <slide-show seconds="6" :images="['/images/grass.jpg', '/images/lawnmower.jpg', '/images/grass2.jpg']"/>


    <!-- ABOUT -->
    <div id="about" class="columns" >
      <!-- <div class="column is-three-fifths image is-hidden-touch"></div> -->
        <div class="column is-two-fifths is-hidden-touch parallax" style="background: url('/images/leavesongrass.jpg')"></div>
        <div class="column is-three-fifths is-full-touch text has-text-centered">
          <div id="about-text" class="has-text-left is-inline-block">
            <div class="is-size-1 has-text-weight-bold">About</div>
            <br>
            <p class="is-size-5">Quality Cuts Lawn Care provides full service lawn care to both commercial and residential customers in Sayre, Waverly, Athens and surrounding areas. Quality Cuts is fully registered, insured
            and qualified to serve you. Several referances are availabe upon request!</p>
          </div>
          <div class="is-full is-hidden-desktop image" id="about-touch-image" style="background: url('/images/leavesongrass.jpg')"></div>
        </div>
    </div>

    <!-- SERVICES -->
    <div id="services-section" class="columns">
      <div class="column is-desktop text" style="background-image: url('/images/drone.jpg');">
        <div id="services" class="column is-half">
          <div class="is-size-1 has-text-weight-bold">Services</div>
          <ul class="icons is-size-5">
            <li><i class="far fa-check margin-right-05"></i><a href="#lawn">Lawn Mowing</a></li>
            <li><i class="far fa-check margin-right-05"></i><a href="#mulch">Mulch/Stone Delivery</a></li>
            <li><i class="far fa-check margin-right-05"></i><a href="#snow">Snow Removal</a></li>
            <li><i class="far fa-check margin-right-05"></i><a href="#springfall">Spring/Fall clean up</a></li>
          </ul>
        </div>
      </div>
    </div>

    <!-- LAWN -->
      <div id="lawn" class="columns">
        <div class="column is-three-fifths is-full-touch text has-text-centered">
          <div id="lawn-text" class="has-text-left is-inline-block">
            <div class="is-size-1 has-text-weight-bold">Lawn Mowing</div>
            <br>
            <p class="is-size-5">Quality Cuts is committed to enhancing our customers most important investment by exceeding their lawn service needs with reliability and value.
               Imagine quality family time, rest and relaxation, and leaving the dirty work up to us. Our flexibility and ability to customize a lawn care program for your property
                allows your business or home to make a great first impression.</p>
            <br>
            <div class="has-text-weight-bold is-size-4">Fertilization</div>
            <p class="is-size-5">All lawns need nutrients to survive and look thier best and sometimes they need a little help to get them, let Quality Cuts take care of you Lawn fertilization needs.</p>
          </div>
          <div class="is-full is-hidden-desktop image" style="background: url('/images/lawn.png')"></div>
        </div>
        <div class="column is-two-fifths is-hidden-touch" style="background: url('/images/lawn.png')"></div>
      </div>

      <!-- MULCH -->
      <div id="mulch" class="columns" >
        <!-- <div class="column is-three-fifths image is-hidden-touch"></div> -->
          <div class="column is-two-fifths is-hidden-touch parallax" style="background: url('/images/mulch.png')"></div>
          <div class="column is-three-fifths is-full-touch text has-text-centered">
            <div id="mulch-text" class="has-text-left is-inline-block">
              <div class="is-size-1 has-text-weight-bold">Mulch/Stone Delivery</div>
              <br>
              <p class="is-size-5">Let us shovel it for you! Take back your weekend and let Quality Cuts deliver install the mulch or decorative rock of your choice.</p>
            </div>
            <div class="is-full is-hidden-desktop image" id="mulch-touch-image" style="background: url('/images/mulch.png')"></div>
          </div>
      </div>

      <!-- SNOW -->
      <div id="snow" class="columns">
        <div class="column is-three-fifths is-full-touch text has-text-centered">
          <div id="lawn-text" class="has-text-left is-inline-block">
            <div class="is-size-1 has-text-weight-bold">Snow Removal</div>
            <br>
            <p class="is-size-5">Servicing commercial and residential properties, we will keep your driveway, parking lot, sidewalks and steps clear of snow and ice.</p>
          </div>
          <div class="is-full is-hidden-desktop image" style="background: url('/images/lawn.png')"></div>
        </div>
        <div class="column is-two-fifths is-hidden-touch" style="background: url('/images/lawn.png')"></div>
      </div>

      <div id="springfall" class="columns">
        <div class="column text has-text-centered">
          <h1 class="is-size-1 has-text-weight-bold">Spring & Fall Clean Up</h1>
          <div  id="cleanup" class="is-inline-block">
            <p class="is-size-5" >Let Quality Cuts take care of all your spring and fall clean up needs. Services include but are certainly not limited to: leaf collection and take away, gutter clean out, lawn debris clean up,
              trash take away and power washing. please dont hesitate to ask about any other services that are not listed!

            </p>
          </div>
            <div class="is-full is-hidden-desktop image" style="background: url('/images/gardening2.jpg')"></div>
        </div>
        <div class="column is-two-fifths is-hidden-touch" style="background: url('/images/flowersandgrass.jpg')"></div>
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
a {
  color: white;
  text-decoration: underline;
}
#services {
  color: #fff;
  margin: auto;
  background: rgba(0,0,0,0.45);
  padding: 3rem;
  i {margin-right: 0.5rem}
}
#about-touch-image, #mulch-touch-image {
  margin-top: 3rem;
  height: 5rem;
}

#about-text, #lawn-text, #mulch-text {
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
