<template lang="">
<div class="">
  <navbar/>
  <slideshow scrollTo="#about" id="top"/>
  <fullheight class="is-primary" id="about">
    <div class="columns">
      <div class="column is-two-fifths"><img src="/images/leavesongrass.jpg"></div>
      <div class="column is-three-fifths">
        <h1 class="title">About</h1>
        <h2 class="subtitle">About Section</h2>
        <p> Quality Cuts Lawn Care is independently owned and operated offering the best lawn care for both residential and commercial customers. Call, Email, or visit us on the web to set up a fast free estimate! Quality Cuts is more than just lawn care, visit Qualitycutslawncare.co for other services, reviews, photos and a pay your bill online option.</p>
      </div>
    </div>
  </fullheight>

  <fullheight class="is-danger" id="services">
    <div class="columns paralax">
      <div class="column is-two-fifths"></div>
      <div class="column is-half">
        <h1 class="title">Services</h1>
        <h2 class="subtitle">Services Section</h2>
        <ul class="icons">
          <li class="icon-list"><i class="far fa-check"></i><a  class="scrolling" href="#lawnmowing">Lawn Mowing</a></li>
          <li class="icon-list"><i class="far fa-check"></i><a class="scrolling" href="#mulch">Mulch/Stone Delivery</a></li>
          <li class="icon-list"><i class="far fa-check"></i><a class="scrolling" href="#springfall">Spring/Fall clean up</a></li>
          <li class="icon-list"><i class="far fa-check"></i><a class="scrolling" href="#snowremoval">Snow Removal</a></li>
        </ul>
      </div>
    </div>
  </fullheight>

<fullheight id="lawnmowing">
  <h1 class="title">Title</h1>
  <h2 class="subtitle">Subtitle</h2>
</fullheight>

<fullheight id="snowremoval">
  <h1 class="title">Title</h1>
  <h2 class="subtitle">Subtitle</h2>
</fullheight>
</div>
</template>

<script>
import Navbar from '~/components/Navbar.vue'
import fullheight from '~/components/fullheight.vue'
import slideshow from '~/components/slideshow.vue'
export default {
  components: {
    Navbar,
    fullheight,
    slideshow
  }
}
</script>
<style lang="scss" scoped>
.title {
  font-size: 3rem;
}

.subtitle {
  font-size: 1.5rem;
}

.icon-list {
  display: flex;
  align-items: center;
  i {
    margin-right: 1rem;
    font-size: 1.5rem;
  }
}

#test {
  color: #fff;
  margin: auto;
  padding: 3rem;
}

#services {
  background-image: url('/images/drone-red.png');
  font-size: 2rem;
}

</style>
