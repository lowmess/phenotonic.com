---
title: Contact
headline: Contact Us
layout: page.jade
---

<form class="contact" action="//formspree.io/hi@phenotonic.com" method="POST">
  <label for="name">Who Are You?</label>
  <input name="name" type="text" placeholder="Kareem Abdul-Jabbar" />
  <label for="email">Where Can We Contact You?</label>
  <input name="email" type="email" placeholder="kareem@ballsohard.com" />

  <label for="message">What Do You Have to Say?</label>
  <textarea name="message"></textarea>

  <input type="text" name="_gotcha" style="display:none" />

  <input type="hidden" name="_next" value="/#{ path }/?thanks" />

  <button>Get in Touch</button>
</form>
