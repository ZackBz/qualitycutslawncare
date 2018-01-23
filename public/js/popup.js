function openPopup (self) {
  self.dataset.parent = self.parentNode.id
  var imageHolder = document.getElementById('image-holder')
  var clone = self.cloneNode()
  clone.id = 'current-image-in-image-holder'
  clone.onclick = null
  imageHolder.appendChild(clone)
  var popup = document.getElementById('popup')
  popup.classList.remove('popup-hidden')
  console.log(self)
}

function closePopup () {
  var popup = document.getElementById('popup')
  var imageHolder = document.getElementById('image-holder')
  var currentImage = document.getElementById('current-image-in-image-holder')
  popup.classList.add('popup-hidden')
  imageHolder.removeChild(currentImage)
}
