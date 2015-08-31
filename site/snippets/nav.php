<nav role="navigation" class="nav">
  <div class="nav__button">
    <i class="icon ion-navicon-round"></i>
  </div>
  <div class="nav__content">
    <div class="nav__logo">
      <a href="<?php echo $site->url() ?>">
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
  </div>
</nav>
