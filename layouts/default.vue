<template>
  <div>
    <section ref="navigation">
      <nav class="header green">

        <div class="left">
          <a href="/" class="width-phablet-12"><h4 class="margin-0">Quality Cuts Lawn Care</h4></a>
        </div>

        <div class="center">
          <a href="#lawncare" class="width-phablet-12">LAWN CARE</a>
          <a href="contact" class="width-phablet-12">CONTACT</a>
          <a href="about" class="width-phablet-12 right">ABOUT</a>
        </div>
      </nav>
    </section>
    <nuxt/>
  </div>
</template>

<script>
export default {
  mounted () {
    window.navHeight = this.$refs.navigation.clientHeight
  }
}
</script>

<style lang="scss">
@import '~assets/main.scss';
</style>
