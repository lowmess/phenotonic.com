<!DOCTYPE html>
<html lang="en">
  <head>
    <?php snippet('head') ?>
  </head>
  <body>

    <?php snippet('nav') ?>

    <header class="landing">
      <div class="landing__hero">
        <h1><?php echo $page->tagline()->html()->widont() ?></h1>
        <?php e($page->copy()->isNotEmpty(), $page->copy()->kirbytext()) ?>
        <a href="#contact" class="btn" id="landing__button"><?php echo $page->landingButton()->html() ?></a>
      </div>
    </header>

    <?php
      if($page->valueProps()->isTrue()) {
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
      }
    ?>

    <?php
      if($page->testimonials()->isTrue()) {
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
      }
    ?>
    <article id="contact" class="contact">
      <section>
        <div class="contact__text">
          <h2><?php echo $page->contactHeadline()->html() ?></h2>
          <?php e(!$page->contactText()->empty(), $page->contactText()->kirbytext()) ?>
        </div>
      </section>
    </article>

    <?php snippet('footer') ?>

  </body>
</html>
