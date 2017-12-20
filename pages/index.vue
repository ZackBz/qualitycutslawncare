<template lang="">
<div class="">
  <navbar/>
  <fullheight class="is-primary" id="about">
    <div class="columns">
      <div class="column is-two-fifths"><img src="/images/leavesongrass.jpg"></div>
      <div class="column is-three-fifths">
        <h1 class="title">About</h1>
        <h2 class="subtitle">About Section</h2>
        <p class="is-size-5">Quality Cuts Lawn Care provides full service lawn care to both commercial and residential customers in Sayre, Waverly, Athens and surrounding areas. Quality Cuts is fully registered, insured and qualified to serve you. Several referances are availabe
          upon request!</p>
      </div>
    </div>
  </fullheight>

  <fullheight class="is-danger" id="services">
    <div class="columns">
      <div class="column is-two-fifths"><img src="/images/drone.jpg"></div>
      <div class="column is-three-fifths">
        <h1 class="title">Services</h1>
        <h2 class="subtitle">Services Section</h2>
        <ul class="icons is-size-5">
          <li><i class="far fa-check margin-right-05"></i><a href="#lawn">Lawn Mowing</a></li>
          <li><i class="far fa-check margin-right-05"></i><a href="#mulch">Mulch/Stone Delivery</a></li>
          <li><i class="far fa-check margin-right-05"></i><a href="#snow">Snow Removal</a></li>
          <li><i class="far fa-check margin-right-05"></i><a href="#springfall">Spring/Fall clean up</a></li>
        </ul>
      </div>
    </div>
  </fullheight>

  <fullheight class="is-info" id="snow">
    <h1 class="title">Snow</h1>
    <h2 class="subtitle">Snow Section</h2>
  </fullheight>
</div>
</template>

<script>
import Navbar from '~/components/Navbar.vue'
import fullheight from '~/components/fullheight.vue'
export default {
  components: {
    Navbar,
    fullheight
  }
}
</script>
<style lang="css">
</style>
