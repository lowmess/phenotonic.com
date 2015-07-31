<nav role="navigation" class="nav">
  <div class="nav__logo">
    <a href="//phenotonic.com">
      <svg role="img" title="Phenotonic">
        <use xlink:href="<?php echo url('assets/images/phenotonic.svg#logo__full--color') ?>"></use>
      </svg>
    </a>
  </div>
  <ul class="nav__links">
    <?php foreach($pages->visible() as $p): ?>
      <li>
        <a <?php e($p->isOpen(), ' class="active"') ?> href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?> </a>
      </li>
    <?php endforeach ?>
  </ul>
  <i class="icon ico-justify nav__button"></i>
</nav>
