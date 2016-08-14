/* global q$ */
q$('.footer__copyright-year').innerHTML = new Date().getFullYear()

// Make sure footer always extends to bottom of page
// Not responsive currently (only sets the new height once)
const footer = q$('.footer')
const footerHeight = footer.getBoundingClientRect().height
const footerBottom = footer.getBoundingClientRect().bottom
const windowHeight = window.innerHeight

if (footerBottom < windowHeight) footer.style.height = footerHeight + (windowHeight - footerBottom) + 1 + 'px'
