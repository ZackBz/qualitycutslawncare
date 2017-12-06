<template lang="html">
  <section>
      <div id="slideshow-backdrop">

        <div class="center width-6" >
          <h1 class="title">Quality Cuts Lawn Care</h1>
          <h4>Est. 2017</h4>
        </div>

        <!-- <div class="center" v-if="current % images.length === 1">
          <h1>hello asdf</h1>
        </div>

        <div class="center" v-if="current % images.length === 2">
          <h1>asdf asdf</h1>
        </div>

        <div class="center" v-if="current % images.length === 3">
          <h1>asdf world</h1>
        </div> -->
      </div>
      <div :class="['body--giant', 'image', {hidden: index  !== current % images.length}]" :style="`background-image: url(${i})`" v-for="(i, index) in images" >


      </div>
  </section>
</template>

<script>
export default {
  props: ['images', 'seconds'],
  data () {
    return {
      current: 0
    }
  },
  methods: {
    resize () {
      console.log('hey')
      let h = window.innerHeight
      this.$refs.slide.style.height = (h - window.navHeight) + 'px'
      document.getElementById('slideshow-backdrop').style.height = (h - window.navHeight) + 'px'
    }
  },
  mounted () {
    window.onresize = this.resize
    window.setTimeout(this.resize)
    window.setInterval(() => {
      this.current += 1
    }, this.seconds * 1000)
  }
}
</script>

<style lang="scss" scoped>
.image {
  position: absolute;
  top: 77px;
  left: 0;
  width: 100%;
  height: calc(100vh - 80px);
  background-attachment: fixed;
  opacity: 1;
  transition: opacity 2s ease-in-out;
  z-index: -1;
  &.hidden {
    opacity: 0;
  }
}
#slideshow-backdrop {
  display: block;
  height: calc(100vh - 80px);
  width: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
  color: white;
  font-size: 18px;
  text-shadow: 0 2px black;
}


</style>
