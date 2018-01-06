/* global $ */

Number.prototype.clamp = function (min, max) {
  return Math.min(Math.max(this, min), max)
}

// const $ = window.$

function scrollToID (id) {
  let el = (id[0] === '#') ? $(id) : $('#' + id)
  $('html, body').animate({
    scrollTop: el.offset().top
  }, 'slow')
}

$(document).ready(function () {
  $('a.scrolling').each(function (e) {
    $(this).click(function (e) {
      e.preventDefault()
      scrollToID($(this).attr('href'))
    })
  })
})
