<article class="value">
  <?php if($data->headline()->isNotEmpty()): ?>
    <h2><?php echo $data->headline()->html() ?></h2>
  <?php endif; ?>
  <?php echo $data->text()->kirbytext() ?>
  <?php foreach($data->children()->visible() as $vp): ?>
    <section class ="value__prop value__prop--<?php echo $vp->title()->html() ?>">
      <div class="value__icon">
        <i class="icon ion-<?php echo $vp->icon()->html() ?>"></i>
      </div>
      <div class="value__text">
        <h3><?php echo $vp->title()->html() ?></h3>
        <?php echo $vp->text()->kirbytext() ?>
      </div>
    </section>
  <?php endforeach; ?>
</article>
