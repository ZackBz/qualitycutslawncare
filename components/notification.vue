<template lang="html">
  <div class="notification is-info" v-if="this.isVisible">
    <button class="delete" @click="close"></button>
    <slot>

    </slot>
  </div>

</template>

<script>
export default {
  data() {
    return{
      isVisible: true
    }
  },
  mounted(){
    setTimeout(this.close, 10000);
  },
  methods:{
    close(){
      this.isVisible = false
    }
  }
}
</script>

<style lang="css">
.notification {
  position: fixed;
  bottom: 1rem;
  right: 3rem;
  z-index: 100;
  margin: 0;
}
</style>
