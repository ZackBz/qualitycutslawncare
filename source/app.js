/* global Vue */
require('./init')

window.Vue = require('vue')

Vue.component('notification', require('../components/notification.vue'))

const app = new Vue({
  el: '#app'
})
