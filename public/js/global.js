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

  // let tel = document.getElementById('telephone')
  // tel.addEventListener('input', function (e) {
  //   if (tel.validity.typeMismatch) tel.setCustomValidity('asdfasdf')
  //   else tel.setCustomValidity('')
  // })
})

function toggleNavbar () {
  $('.navbar-menu').toggleClass('is-active')
}
