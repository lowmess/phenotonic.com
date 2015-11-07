<a href="#"
  class="snipcart-add-item btn"
  data-item-id="<?php echo $page->id() ?>"
  data-item-name="<?php echo $page->title() ?>"
  data-item-price="<?php echo $page->price() ?>"
  data-item-weight="<?php echo $page->weight() ?>"
  data-item-url="<?php echo $page->url() ?>"
  <?php if( $page->desc()->isNotEmpty() ): ?>
    data-item-description="<?php echo $page->desc() ?>">
  <?php endif ?>

  Add to Cart
</a>
