<template lang="html">
  <div class="your-class">
    <img src="/images/grass.jpg" alt="" class="hero is-fullheight">
    <img src="/images/grass2.jpg" alt="" class="hero is-fullheight">
    <img src="/images/grass3.jpg" alt="" class="hero is-fullheight">
    <img src="/images/grass4.jpg" alt="" class="hero is-fullheight">
  </div>

</template>

<script>
import Navbar from '~/components/Navbar.vue'
export default {
  components: {
    Navbar
  },
  data () {
    return {
      sectionClasses: ['is-success', 'is-info', 'is-danger', 'is-warning'],
      sectionid: ['about', 'services', 'contact', 'snow', 'pricing']
    }
  },
  mounted () {
    window.$('.your-class').slick({
      autoplay: true,
      autoplaySpeed: 3000,
      arrows: false,
      dots: true,
      infinite: true,
      fade: true,
      speed: 2000,
      cssEase: 'linear'
    })
  }
}
</script>

<style lang="css">
</style>
