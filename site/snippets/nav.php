<nav role="navigation" class="nav">
  <div class="nav__logo">
    <a href="//phenotonic.com">
      <svg role="img" title="Phenotonic" class="nav__logo__svg">
        <use xlink:href="<?php echo url('assets/images/phenotonic.svg#logo__full--color') ?>"></use>
      </svg>
    </a>
  </div>
  <div class="nav__links">
    <ul class="nav__links__list">
      <?php foreach($pages->visible() as $p): ?>
        <li class="nav__links__list__item">
          <a <?php e($p->isOpen(), ' class="active"') ?> href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?> </a>
        </li>
      <?php endforeach ?>
    </ul>
  </div>
</nav>
