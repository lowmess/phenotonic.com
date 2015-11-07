<nav class="nav" role="navigation">

  <div class="nav__mobile-button hamburger">
    <div class="hamburger__line"></div>
    <div class="hamburger__line"></div>
    <div class="hamburger__line"></div>
  </div>
  
  <a href="<?php echo $site->url() ?>" class="nav__logo">
    <?php snippet('logo') ?>
  </a>

  <form class="nav__search">
    <input type="search" name="q" value="<?php echo esc($query) ?>">
    <button><i class="icon ion-search"></i></button>
  </form>

  <ul class="nav__buttons">

    <li class="nav__cart">
      <i class="icon ion-android-cart nav__cart-button"></i>

      <ul class="snipcart-summary nav__submenu nav__cart__submenu" ontouchstart: "this.classList.toggle('nav__submenu--hover');">
        <li class="snipcart-total-price"></li>
        <li><button class="snipcart-checkout btn">Checkout</button></li>
      </ul>
    </li>

    <li class="nav__site">
      <div class="nav__site-button hamburger">
        <div class="hamburger__line"></div>
        <div class="hamburger__line"></div>
        <div class="hamburger__line"></div>
      </div>

      <ul class="nav__submenu nav__menu__submenu" ontouchstart: "this.classList.toggle('nav__submenu--hover');">
        <?php foreach($pages->visible() as $p): ?>
          <li>
            <a <?php e($p->isOpen(), ' class="active"') ?> href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>
          </li>
        <?php endforeach ?>
      </ul>
    </li>

  </ul>
</nav>
