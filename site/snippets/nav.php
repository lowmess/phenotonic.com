<nav role="navigation" class="nav">
  <div class="nav__logo">
    <a href="//phenotonic.com">
      <?php snippet('logo') ?>
    </a>
  </div>
  <ul class="nav__links">
    <?php foreach($pages->visible() as $p): ?>
      <li>
        <a <?php e($p->isOpen(), ' class="active"') ?> href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>
      </li>
    <?php endforeach ?>
  </ul>
  <i class="icon ico-justify nav__button"></i>
</nav>
