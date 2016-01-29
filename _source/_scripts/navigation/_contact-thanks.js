var page = window.location.href;
var thanks = page.search("/?thanks");
var form = $('.contact');
var content = $('.main');

if ( thanks !== -1 && form && content ) {
  var h2 = document.createElement('h2');
  h2.innerHTML = "Thanks!";
  content.insertBefore(h2, form);

  var p = document.createElement('p');
  p.innerHTML = "We'll be getting back to you shortly. In the meantime, please enjoy this gif of an otter playing a keyboard.";
  content.insertBefore(p, form);

  var img = document.createElement('img');
  img.src = "http://i.giphy.com/slNwi1TTwR40U.gif";
  img.alt = "Just playing my keyboard, nbd.";
  content.insertBefore(img, form);

  var hr = document.createElement('hr');
  content.insertBefore(hr, form);
}
