function popup (self) {
  self.dataset.parent = self.parentNode.id
  var newParent = document.getElementById('popup')
  newParent.appendChild(self)
  newParent.classList.remove('popup-hidden')
  console.log(self)
}
