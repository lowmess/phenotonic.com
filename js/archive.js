/* global q$ */
// jesus i was so bad at JS lol. might as well match convention tho ¯\_(ツ)_/¯

var archiveButton = q$('.archive__button')

archiveButton.addEventListener('click', function () {
  var backdrop = document.createElement('div')
  var modal = document.createElement('div')
  var header = document.createElement('h2')
  var content = document.createElement('p')
  var close = document.createElement('button')

  backdrop.className = 'modal__backdrop'

  modal.className = 'modal'

  close.className = 'modal__close'
  close.textContent = 'X'
  close.addEventListener('click', function () {
    backdrop.parentNode.removeChild(backdrop)
  })

  header.className = 'modal__header'
  header.textContent = 'Unfortunately, Phenotonic has closed its (metaphorical) doors.'

  content.className = 'modal__content'
  content.textContent = 'This archived version of the site was created to show exactly what our website was in the months and weeks leading up to the difficult decision to cease operations. It should look, feel, and work just as the live site did, excepting any of the ecommerce functionality.'

  modal.appendChild(close)
  modal.appendChild(header)
  modal.appendChild(content)
  backdrop.appendChild(modal)
  q$('body').appendChild(backdrop)
})
