// This exists strictly for mobile browsing. When the address bar is removed on scroll, it causes a repaint for all elements with a vh/%-based height.

// Let's attempt to not make window resizing on desktop ugly as shit.
if (window.matchMedia('(max-width:640px)')) {
  // Get landing element & it's height
  var landing = $('.landing')
  var landingHeight = landing.getBoundingClientRect().height

  // Set height based on height on inital load (override 100vh)
  landing.height = landingHeight + 1 + 'px'
  landing.minHeight = 0
}
