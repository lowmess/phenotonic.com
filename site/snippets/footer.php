<footer>
  <div class="footer__container">
      <ul>
        <li>
          <a <?php e($page->isOpen(), 'class="active"') ?> href="<?php echo $site->url() ?>">Home</a>
        <?php foreach($pages->visible() as $p): ?>
          <li>
            <a <?php e($page->isOpen(), ' class="active"') ?> href="<?php echo $page->url() ?>"><?php echo $p->title()->html() ?></a>
          </li>
        <?php endforeach ?>
      </ul>
      <ul>
        <li>
          <?php echo kirbytag(array(
            'email' => 'info@phenotonic.com',
            'text' => 'Email'
          )); ?>
        </li>
        <li><a href="//facebook.com/phenotonic">Facebook</a></li>
        <li><a href="//instagram.com/phenotonic">Instagram</a></li>
        <li><?php echo twitter('phenotonic', 'Twitter') ?></li>
      </ul>
      <address>
        <ul>
          <li><strong>Phenotonic, LLC</strong></li>
          <li>P.O. Box #6073</li>
          <li>Peoria, AZ 85302</li>
          <li>
            <?php echo kirbytag(array(
              'tel' => '+16025294769',
              'text' => '(602) 529-4769'
            )); ?>
          </li>
        </ul>
      </address>
    <div>
      <svg role="img" title="Phenotonic Icon" class="footer__icon">
        <use xlink:href="<?php url('assets/images/phenotonic.svg#logo__icon') ?>"></use>
      </svg>
    </div>
  </div>
</footer>
