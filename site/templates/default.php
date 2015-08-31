<!DOCTYPE html>
<html lang="en">
  <head>
    <?php snippet('head') ?>
  </head>
  <body>

    <?php snippet('nav') ?>

  <main class="main" role="main">

    <div class="text">
      <h1><?php echo $page->title()->html() ?></h1>
      <?php echo $page->text()->kirbytext() ?>
    </div>

  </main>

  <?php snippet('footer') ?>

</body>
</html>
