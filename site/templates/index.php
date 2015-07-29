<!DOCTYPE html>
<html>
  <head>
    <?php snippet('head') ?>
  </head>
  <body>
    <?php snippet('nav') ?>
    <div class="landing">
      <section class="hero">
        <div class="hero__wrapper">
          <div class="hero__tagline">
            <h1>We want to help you grow your best garden.</h1>
          </div>
          <button onClick="location.href='#contact'" class="hero__button">Let&rsquo;s Grow</button>
        </div>
      </section>
    </div>
    <section class="value">
      <div class="value__prop">
        <div class="value__prop__icon value__prop__icon--exp"><i class="fi-trophy"></i></div>
        <div class="value__prop__text">
          <h2>Experience</h2>
          <p>Whether your garden is in a soil or hydroponic environment, is grown using organic or synthetic nutrients, is outdoor or indoors, our team of consultants has the experience to prevent any problems, as well asdiagnose &amp; remedy existing ones.</p>
        </div>
      </div>
      <div class="value__prop">
        <div class="value__prop__icon value__prop__icon--net"><i class="fi-torsos-all"></i></div>
        <div class="value__prop__text">
          <h2>Network</h2>
          <p>Over the course of our careers as gardening enthusiasts, we have built a network of independent contractors. If your garden has HVAC, water, or electrical needs, we know just the person for the job.</p>
        </div>
      </div>
      <div class="value__prop">
        <div class="value__prop__icon value__prop__icon--edu"><i class="fi-book-bookmark"></i></div>
        <div class="value__prop__text">
          <h2>Education</h2>
          <p>Our mission isn&rsquo;t just to quietly prevent or fix issues: we want to educate you. With every visit, you&rsquo;ll receive a report that exhaustively examines your current grow situation, including explaining past problems and potential issues in detail.</p>
        </div>
      </div>
    </section>
    <section id="contact" class="contact">
      <div class="contact__wrapper">
        <div class="contact__text">
          <h2>Schedule an appointment now</h2>
          <p>Interested in working with us? Great! Shoot us an email by filling out the form, and you&rsquo;ll be connected with one of our consultants to find a time that works for everyone, as well as get some background information about your gardening environment.</p>
        </div>
        <div class="contact__form">
          <form>
            <label for="name">Your name</label>
            <input title="name" placeholder="Kareem Abdul-Jabbar"/>
            <label for="email">Your email</label>
            <input type="email" title="email" placeholder="kareem@ballsohard.com"/>
            <label for="message">Your message</label>
            <textarea title="message" placeholder="Now would be a great time to go over your needs or days you can meet!"></textarea>
            <button class="contact__form__button">Get in Touch</button>
          </form>
        </div>
      </div>
    </section>
  </body>
</html>
