var page = window.location.href;
var thanks = page.search("/?thanks");
var form = $('.contact');
var content = $('.main');

if ( thanks && form && content ) {
  var h2 = document.createElement('h2');
  h2.innerHTML = "Thanks!";
  content.insertBefore(h2, form);

  var p = document.createElement('p');
  p.innerHTML = "We'll be getting back to you shortly.";
  content.insertBefore(p, form);

  var hr = document.createElement('hr');
  content.insertBefore(hr, form);
}
