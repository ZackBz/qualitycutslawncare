<template lang="html">
  <nav :class="['navbar', 'is-fixed-top', {'transparent': !showDropdown}]" role="navigation" aria-label="main navigation" ref="navbar">
  <div class="navbar-brand">
    <a class="navbar-item" href="https://bulma.io">
      <img src="https://bulma.io/images/bulma-logo.png" alt="Bulma: a modern CSS framework based on Flexbox" width="112" height="28">
    </a>

    <div class="navbar-burger" @click="toggleDropdown">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>

  <div :class="['navbar-menu', {'is-active': showDropdown}]">
    <a href="#services" class="navbar-item scrolling">
      Services
    </a>
    <a href="#about" class="navbar-item scrolling" >
      About
    </a>
  </div>
</nav>
</template>

<script>
export default {
  data () {
    return {
      showDropdown: false
    }
  },
  mounted () {
    window.addEventListener('scroll', this.scroll)
    this.scrollNumPage = window.scrollNumPage
  },
  methods: {
    click (e, id) {
      e.preventDefault()
      window.scrollToID(id)
    },
    toggleDropdown () {
      this.showDropdown = !this.showDropdown
    },
    scroll () {
      let el = this.$refs.navbar
      if (window.scrollY < el.clientHeight / 2) el.classList.add('transparent')
      else el.classList.remove('transparent')
    }
  }
}
</script>

<style lang="scss" scoped>
  .navbar {transition: all 1s;}
  .transparent {
    background-color: transparent;
    filter: grayscale(100);
  }
  .navbar-menu {
    justify-content: flex-end;
    .navbar-item {text-align: right}
  }
</style>
