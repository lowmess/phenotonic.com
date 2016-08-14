/* global q$ */

const query = window.location.search === '?thanks'

const contactContact = q$('.contact--contact')
const contactServices = q$('.contact--services')

if (query && contactContact) {
  contactContact.removeChild(q$('.contact__form'))

  let h2Contact = document.createElement('h2')
  h2Contact.innerHTML = 'Thanks!'
  contactContact.appendChild(h2Contact)

  let pContact = document.createElement('p')
  pContact.innerHTML = "We'll be getting back to you shortly. In the meantime, please enjoy this gif of an otter playing a keyboard."
  contactContact.appendChild(pContact)

  let imgContact = document.createElement('img')
  imgContact.src = '/images/contact.thanks.gif'
  imgContact.alt = 'Just playing my keyboard, nbd.'
  imgContact.classList.add('is-full-width')
  contactContact.appendChild(imgContact)
}

if (query && contactServices) {
  contactServices.removeChild(q$('.contact__form'))
  q$('.contact__tagline').innerHTML = 'Thanks!'

  let imgServices = document.createElement('img')
  imgServices.src = '/images/services.thanks.gif'
  imgServices.alt = 'Us, rushing back to our keyboards.'
  imgServices.classList.add('is-full-width')
  contactServices.appendChild(imgServices)

  let pServices = document.createElement('p')
  pServices.innerHTML = 'We&rsquo;re rushing to get back to you. Hang tight, and we&rsquo;ll get back to you soon!</p><p>Need to fill out another form? No problem, just <a href="/services#contact">click here</a>.'
  contactServices.appendChild(pServices)
}
