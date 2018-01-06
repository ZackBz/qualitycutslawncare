<template lang="html">

  <div class="slideshow-component">
    <div class="slideshow hero is-fullheight">
      <div class="slide-image" v-for="(image, index) in this.getImages()" :style="{'background-image': `url(${image})`}"></div>
    </div>

    <div class="scroll-continue">
      <i class="far fa-angle-double-down" @click="cont"></i>
    </div>
  </div>


</template>

<script>
import fullheight from '~/components/fullheight.vue'

export default {
  props: ['scrollTo'],
  data () {
    return {
      currentImage: 0,
      urls: '/images/grass.jpg /images/grass2.jpg /images/grass3.jpg /images/grass4.jpg'
    }
  },
  methods: {
    cont () {
      window.scrollToID(this.scrollTo)
    },
    addImage (imageAdd) {
      if (this.urls.length > 0) this.urls += ' '
      // this.urls += 'url(' + imageAdd + ')'
      this.urls += imageAdd
    },
    getImages () {
      return this.urls.split(' ')
    },
    changeImage () {
      this.currentImage += 1
      this.currentImage = this.currentImage % this.getImages().length
      window.$('.slideshow').animate({'margin-left': (this.currentImage * -100) + 'vw'}, 1000)
    }
  },
  mounted () {
    let $ = window.$
    $('.slideshow').slick({
      autoplay: true,
      autoplaySpeed: 3000,
      infinite: true,
      fade: true,
      speed: 2000,
      cssEase: 'linear'
    })
  },
  components: {
    fullheight
  }
}
</script>

<style lang="scss" scoped>
.slideshow-component { margin-bottom: -0.4rem }
.scroll-continue {
    position: absolute;
    bottom: 1rem;
    text-align: center;
    font-size: 4rem;
    width: 100%;
    color: white;
    text-shadow: 0px 2px 4px black;
    i {
      cursor: pointer;
      &:hover {
        text-shadow: 0 6px 4px rgba(0, 0, 0, 0.65);
      }
    }
}

.slide-image {
  height: 100vh;
  background-size: cover;
  background-repeat: no-repeat;
}
</style>
