<!DOCTYPE html>
<html lang="en">
  <head>
    <?php snippet('head') ?>
  </head>
  <body>

    <?php snippet('nav') ?>

  <main class="main" role="main">

    <ul>
      <?php foreach($results as $result): ?>
        <li>
          <a href="<?php echo $result->url() ?>">
            <?php echo $result->title()->html() ?>
          </a>
        </li>
      <?php endforeach ?>
    </ul>

  </main>

  <?php snippet('footer') ?>

</body>
</html>
