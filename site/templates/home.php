<!DOCTYPE html>
<html>
  <head>
    <?php snippet('head') ?>
  </head>
  <body>

    <?php snippet('nav') ?>

    <header class="landing">
      <div class="landing__hero">
        <h1><?php echo $page->tagline()->html() ?></h1>
        <?php e(!$page->copy()->empty(), $page->copy()->kirbytext()) ?>
        <button onClick="location.href='#contact'" type="button" name="contact" class="btn"><?php echo $page->landingButton() ?></button>
      </div>
    </header>

    <?php /*
      if($page->hasVisibleChildren()) {
        foreach($page->children()->visible() as $section) {
          if($section->hasChildren()) {
            snippet($section->uid(), array('data' => $section));
          }
        }
      }
      */ ?>

    <?php if($page->valueProps()): ?>
      <section class="value">
        <?php
          foreach($page->children()->visible() as $section) {
            $sectionName = $section->dirname();
            $vp = 'value';
            if(
              strpos($sectionName, $vp) !== false
              && strpos($sectionName, $vp) !== null
              && $section->hasChildren()) {
                snippet($section->uid(), array('data' => $section));
            }
          }
        ?>
      </section>
    <?php endif ?>

  <?php if($page->testimonials()): ?>
    <section class="testimonials">
      <?php
        foreach($page->children()->visible() as $section) {
          $sectionName = $section->dirname();
          $test = 'testimonials';
          if(
            strpos($sectionName, $test) !== false
            && strpos($sectionName, $vp) !== null
            && $section->hasChildren()) {
              snippet($section->uid(), array('data' => $section));
          }
        }
      ?>
    </section>
  <?php endif ?>

    <section id="contact" class="contact">
      <div class="contact__text">
        <h2><?php echo $page->contactHeadline()->html() ?></h2>
        <?php e(!$page->contactText()->empty(), $page->contactText()->kirbytext()) ?>
      </div>
    </section>

    <?php snippet('footer') ?>

  </body>
</html>
