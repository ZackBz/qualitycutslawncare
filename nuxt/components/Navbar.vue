<template lang="html">
  <nav :class="['navbar', 'is-fixed-top', {'transparent': !showDropdown}]" role="navigation" aria-label="main navigation" ref="navbar">
  <div class="navbar-brand brand">
    <a class="navbar-item scrolling" href="#top">
      <h1>Quality Cuts lawn Care</h1>
    </a>

    <div class="navbar-burger" @click="toggleDropdown">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>

  <div :class="['navbar-menu', {'is-active': showDropdown}]">
    <a href="#home" class="navbar-item scrolling" >
      Home
    </a>
    <a href="#about" class="navbar-item scrolling" >
      About
    </a>
    <a href="#services" class="navbar-item scrolling">
      Services
    </a>
    <a href="#photos" class="navbar-item scrolling" >
      Photos
    </a>
    <a href="#contact" class="navbar-item scrolling" >
      Contact
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
      // let el = this.$refs.navbar
      // if (window.scrollY < el.clientHeight / 2) el.classList.add('transparent')
      // else el.classList.remove('transparent')
    }
  }
}
</script>

<style lang="scss" scoped>
  .navbar {transition: all 1s;}
  // .transparent {
  //   background-color: transparent;
  //   filter: grayscale(100);
  // }
  .navbar-menu {
    justify-content: flex-end;
    .navbar-item {
      text-align: right;
      color: black;
      border-bottom: 4px solid transparent;
      &:hover {
        background: transparent;
        border-bottom: 4px solid #01d1b2;
      }
    }
  }

  .brand {
    text-align: left;
    color: black;
    border-bottom: 4px solid transparent;
    text-decoration: none;
    &:hover{
    border-bottom: 4px solid #01d1b2;

    }
  }
</style>
