<template lang="html">
  <div>
    <slide-show seconds="6" images="/images/grass.jpg /images/lawnmower.jpg /images/grass2.jpg"/>
    <div class="columns">
      <div class="column">
          <div class="card">
              <img src="/images/leavesongrass.jpg" width="500rem" height="500rem">
          </div>
      </div>

      <div class="column width-phone-2">
        <section>
          <div class="body--large card" id="lawncare">
            <p>We are committed to enhancing our clients’ most important investment by exceeding their lawn service needs with reliability and value. Imagine quality family time, rest and relaxation, and leaving the dirty work up to us. Your business is just as important as ours. Like any other turf, the lawn around your business requires attention and service. Our flexibility and ability to customize a lawn care program for your property allows your business to make a great first impression.</p>

            <h1>OUR SERVICES</h1>
            <hr>

            <ul>
              <li>WEED CONTROL</li>
              <li>DE-THATCHING</li>
              <li>CORE AERATION TREATMENT</li>
              <li>EDGING</li>
              <li>FERTILIZATION</li>
              <li>POWER WASHING</li>
            </ul>
          </div>
        </section>

        <div class="card purple">
            <p>I am </p>
        </div>
      </div>
    </div>

    <!-- <img name="slide" width="400" height="200"> -->
  </div>
</template>

<script>
import SlideShow from '~/components/SlideShow.vue'
export default {
  components: {
    SlideShow
  },
  data () {
    return {
      current: 1,
      images: []
    }
  },
  methods: {
    changeImg () {
      this.$refs.slide.style['background-image'] = 'url(' + this.images[this.current % this.images.length] + ')'
      this.current += 1
    }
  },
  mounted () {
    // images
    this.images[0] = '/images/grass.jpg'
    this.images[1] = '/images/lawnmower.jpg'
    this.images[2] = '/images/grass2.jpg'
    this.images[3] = '/images/grass3.jpg'
    this.images[4] = '/images/grass4.jpg'

    // interval for image switch
    window.setInterval(this.changeImg, 3000)
  }
}
</script>

<style lang="css">

</style>
