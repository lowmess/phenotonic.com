<article class="value">
  <?php foreach($data->children()->visible() as $vp): ?>
    <div class="value__icon">
      <i class="icon ion-<?php echo $vp->icon()->html() ?>"></i>
    </div>
    <div class="value__text">
      <h2><?php echo $vp->title()->html() ?></h2>
      <?php echo $vp->text->kirbytext() ?>
    </div>
  <?php endforeach ?>
</article>
