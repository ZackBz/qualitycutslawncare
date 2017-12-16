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
</section>
</template>

<script>
export default {
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
</style>
