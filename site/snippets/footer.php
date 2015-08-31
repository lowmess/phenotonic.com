<footer class="footer">
  <div class="footer__contact">
      <ul class="footer__column">
        <li>
          <a <?php e($page->isOpen(), 'class="active"') ?> href="<?php echo $site->url() ?>">Home</a>
        <?php foreach($pages->visible() as $page): ?>
          <li>
            <a <?php e($page->isOpen(), ' class="active"') ?> href="<?php echo $page->url() ?>"><?php echo $page->title()->html() ?></a>
          </li>
        <?php endforeach ?>
      </ul>
      <ul class="footer__column">
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
      <address class="footer__column">
        <ul>
          <li>Phenotonic, LLC</li>
          <li>P.O. Box #6073</li>
          <li>Peoria, AZ 85302</li>
          <li>
            <?php echo kirbytag(array(
              'tel' => '+16025294769',
              'text' => '(602) 529-GROW'
            )); ?>
          </li>
        </ul>
      </address>
  </div>
</footer>
