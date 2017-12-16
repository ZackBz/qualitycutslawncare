<template lang="html">
  <section class="hero is-success is-fullheight">

    <div class="hero-head">
      <nav class="navbar">
        <div class="container">
          <div class="navbar-brand">
            <a href="/" class="navbar-item">
              <h1 class="is-size-1 has-text-weight-bold" >Quality Cuts Lawn Care</h1>
            </a>
            <label class="navbar-burger burger" for="nav-toggle-state">
              <span></span>
              <span></span>
              <span></span>
            </label>
          </div>
          <input type="checkbox" id="nav-toggle-state" />
          <div id="mobileMenu" class="navbar-menu">
            <div class="navbar-end">
              <a href="#about" class="navbar-item">
                About
              </a>
              <a href="#services-section" class="navbar-item">
                Services
              </a>
              <a class="navbar-item">
                Gallery
              </a>
              <a class="navbar-item">
                Reviews
              </a>
              <a href="/contact" class="navbar-item">
                Contact
              </a>
            </div>
          </div>
        </div>
      </nav>
    </div>


    <div class="hero-body" id="slideshow-backdrop" :style="{content: preload(), 'background-image': preload().split(' ')[0]}">
      <div class="container has-text-centered is-size-1">
        <h1 class="title">
          Quality Cuts Lawn Care
        </h1>
        <h2 class="subtitle">
          Established in 2017
        </h2>
      </div>
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
    preload () {
      let res = ''
      this.images.forEach(image => {
        res += 'url(' + image + ') '
      })
      return res
    },
    resize () {
      var slideshow = document.getElementById('slideshow-backdrop')
      let h = window.innerHeight
      slideshow.style.height = (h - window.navHeight) + 'px'
      slideshow.style.height = (h - window.navHeight) + 'px'
    }
  },
  mounted () {
    window.onresize = this.resize
    window.setTimeout(this.resize)
    window.setInterval(() => {
      this.current += 1
      document.getElementById('slideshow-backdrop').style['background-image'] = 'url(' + this.images[this.current % this.images.length] + ')'
    }, this.seconds * 1000)
  }
}
</script>

<style lang="scss" scoped>
#nav-toggle-state {
  display: none;
}

#nav-toggle-state:checked ~ #mobileMenu {
  display: block;
  position: absolute;
  width: 100%;
  z-index: 1;
  text-align: right;
}
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
  // text-shadow: 0 2px black;
}


</style>
