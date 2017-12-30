<template lang="html">
  <fullheight class="slideshow" :style="{
     content: this.urls,
    'background-image': this.getImages()[this.currentImage]
    }">

  </fullheight>
</template>

<script>
import fullheight from '~/components/fullheight.vue'
export default {
  data () {
    return {
      currentImage: 0,
      urls: ''
    }
  },
  methods: {
    addImage (imageAdd) {
      if (this.urls.length > 0) this.urls += ' '
      this.urls += 'url(' + imageAdd + ')'
    },
    getImages () {
      return this.urls.split(' ')
    },
    changeImage () {
      this.currentImage += 1
      this.currentImage = this.currentImage % this.getImages().length
    }
  },
  mounted () {
    this.addImage('/images/lawnmower.jpg')
    this.addImage('/images/grass.jpg')
    this.addImage('/images/grass2.jpg')
    this.addImage('/images/grass3.jpg')
    this.addImage('/images/grass4.jpg')

    window.setInterval(this.changeImage, 3000)
  },
  components: {
    fullheight
  }
}
</script>

<style lang="scss" scoped>
.slideshow {
    background-repeat: no-repeat;
    background-size: cover;
}
</style>
