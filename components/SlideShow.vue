<template lang="html">
  <section>
      <div id="slideshow-backdrop"></div>
      <div :class="['body--giant', 'image', {hidden: index  !== current % imgs.length}]" :style="`background-image: url(${i})`" v-for="(i, index) in imgs" ></div>
  </section>
</template>

<script>
export default {
  props: ['images', 'seconds'],
  data () {
    return {
      current: 1
    }
  },
  computed: {
    imgs () {
      return this.images.split(' ')
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
  display: block;
  &.hidden {
    opacity: 0;
  }
}
#slideshow-backdrop {
  display: block;
  height: calc(100vh - 80px);
  background: black;
}
</style>
