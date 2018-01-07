let $ = window.jQuery

function scrollToID (id) {
  let el = (id[0] === '#') ? $(id) : $('#' + id)
  $('html, body').animate({
    scrollTop: el.offset().top
  }, 'slow')
}

$(document).ready(function () {
  $('.slideshow').slick({
    autoplay: true,
    autoplaySpeed: 3000,
    infinite: true,
    fade: true,
    speed: 2000,
    cssEase: 'linear'
  })

  $('a.scrolling').each(function (e) {
    $(this).click(function (e) {
      e.preventDefault()
      scrollToID($(this).attr('href'))
    })
  })
})

function toggleNavbar () {
  $('.navbar-menu').toggleClass('is-active')
}
