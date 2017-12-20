<template lang="html">
  <div class="">
    <navbar/>
    <section :class="['hero', sectionClasses[(n-1) % sectionClasses.length], 'is-fullheight']" :id="sectionid[(n-1) % sectionid.length]" v-for="n in 5">
      <div class="hero-body">
        <div class="container">
          <h1 class="title">
            Full Height {{ n }}
          </h1>
          <h2 class="subtitle">
            Full Height subtitle {{ n }}
          </h2>
        </div>
      </div>
    </section>
  </div>

</template>

<script>
import Navbar from '~/components/Navbar.vue'
export default {
  components: {
    Navbar
  },
  data () {
    return {
      sectionClasses: ['is-success', 'is-info', 'is-danger', 'is-warning'],
      sectionid: ['about', 'services', 'contact', 'snow', 'pricing']
    }
  }
}
</script>

<style lang="css">
</style>
