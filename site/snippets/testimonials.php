<article class="testimonials">
  <?php if($data->headline()->isNotEmpty()): ?>
    <h2><?php ech $data->headline()->html()) ?></h2>
  <?php endif; ?>
  <?php echo $data->text()->kirbytext() ?>
  <?php foreach($data->children()->visible() as $t): ?>
    <blockquote cite="//<?php e($t->website()->isNotEmpty(), $t->website()->html()) ?>" class ="testimonial testimonial--<?php echo $t->author()->html() ?>">
      <h1 class="testemonial__quotation">&ldquo;</h1>
      <?php echo $t->text()->kirbyText() ?>
      <cite>
        <?php if($t->hasImages()->isTrue()): ?>
          <img src="<?php echo $t->images()->first()->url() ?>" alt="" class="testimonial__avatar" />
        <?php endif; ?>
        <?php if($t->website()->isNotEmpty()): ?>
          <a href="//<?php echo $t->website()->html() ?>"><?php echo $t->author()->html() ?></a>
        <?php else: ?>
          <?php echo $t->author()->html() ?>
        <?php endif; ?>
        <?php if($t->bio()->isNotEmpty()): ?>
          , <?php echo $t->bio()->html() ?>
        <?php endif; ?>
        <?php if($t->handle()->isNotEmpty()): ?>
          <br />
          <?php echo twitter($t->handle) ?>
        <?php endif; ?>
      </cite>
    </blockquote>
  <?php endforeach; ?>
</article>
