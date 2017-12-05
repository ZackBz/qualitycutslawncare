<template lang="html">
  <div>
    <section>
        <div class="body--giant blue noTiles" style="background-image: url('/images/grass.jpg')" ref="slide">
      </div>
    </section>

    <div class="columns">
      <div class="column width-tablet-5">
          <div class="card red">
              <p>I am a column</p>
          </div>
      </div>
      <div class="column width-phone-2">
        <div class="card yellow">
            <p>I am </p>
        </div>
      </div>

      <div class="column width-phone-2">
        <section>
          <div class="body--large">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
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
export default {
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
.noTiles {
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
}
</style>
