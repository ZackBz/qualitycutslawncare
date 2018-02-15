var images = []
var currentImage = 0
function openPopup (self) {
  self.dataset.parent = self.parentNode.id
  var imageHolder = document.getElementById('image-holder')
  var clone = self.cloneNode()
  clone.id = 'current-image-in-image-holder'
  clone.onclick = null
  imageHolder.appendChild(clone)
  var popup = document.getElementById('popup')
  popup.classList.remove('popup-hidden')
  setCurrentImage(self)
}

function removeImage () {
  var currentImageElement = document.getElementById('current-image-in-image-holder')
  var imageHolder = document.getElementById('image-holder')
  imageHolder.removeChild(currentImageElement)
}

function closePopup () {
  var popup = document.getElementById('popup')
  // var imageHolder = document.getElementById('image-holder')
  // var currentImageElement = document.getElementById('current-image-in-image-holder')
  popup.classList.add('popup-hidden')
  removeImage()
  // imageHolder.removeChild(currentImageElement)
}

function setDataNumber () {
  images = document.querySelectorAll('.image-panel')
  for (var i = 0; i < images.length; i++) {
    var image = this.images[i]
    image.dataset.number = i
  }
}

function arrowLeft () {
  if (currentImage > 0) currentImage -= 1
  setImage()
}

function arrowRight () {
  if (currentImage < images.length - 1) currentImage += 1
  setImage()
}

function setImage () {
  removeImage()
  openPopup(images[currentImage])
}

function setCurrentImage (self) {
  currentImage = parseInt(self.dataset.number)
}

setDataNumber()
