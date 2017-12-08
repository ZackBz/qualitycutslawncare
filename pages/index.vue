<template lang="html">
  <div>
    <slide-show seconds="6" :images="['/images/grass.jpg', '/images/lawnmower.jpg', '/images/grass2.jpg']"/>
    <div class="columns">
      <section class="margin-bottom-3">
        <!-- <img class="column" src="/images/leavesongrass.jpg" /> -->
        <div class="column card" style="background: url('/images/leavesongrass.jpg')">

        </div>

        <div class="column card width-phone-2 padding-3 content">
          <p>We are committed to enhancing our clients’ most important investment by exceeding their lawn service needs with reliability and value. Imagine quality family time, rest and relaxation, and leaving the dirty work up to us. Your business is just as important as ours. Like any other turf, the lawn around your business requires attention and service. Our flexibility and ability to customize a lawn care program for your property allows your business to make a great first impression.</p>

          <h1>OUR SERVICES</h1>
          <ul>
            <li><i class="far fa-check fa-1x"></i>WEED CONTROL</li>
            <li><i class="far fa-check fa-1x"></i>DE-ThATCHING</li>
            <li><i class="far fa-check fa-1x"></i>EDGING</li>
            <li><i class="far fa-check fa-1x"></i>POWER WASHING</li>
            <li><i class="far fa-check fa-1x"></i>FERTILIZATION</li>
          </ul>

          <div class="card purple">
              <p>I am </p>
          </div>
        </div>
      </section>

    </div>

    <!-- <img name="slide" width="400" height="200"> -->
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

<style lang="css">

</style>
