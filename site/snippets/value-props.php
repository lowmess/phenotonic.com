<article class="value">
  <?php if($data->headline()->isNotEmpty()): ?>
    <h2><?php echo $data->headline()->html() ?></h2>
  <?php endif; ?>
  <?php echo $data->text()->kirbytext() ?>
  <?php foreach($data->children()->visible() as $vp):

    // Let's make some new images, maybe? Only if we need to tho. And there are images that exist
    if($vp->hasImages()) { // && $vp->images()->count() <= 1) {

      $bgExists = false;
      $resize   = false;

      foreach($vp->images() as $image) { // try to find a background
        $n = strpos($image->dir(), '_background');
        if ($n !== false) $bgExists = true;
        if ($bgExists) break;
      }

      if(!$bgExists) {

        foreach($vp->images() as $image) { //delete old background images
          $q = strpos($image->dir(), '_background@');
          if ($q !== false) {
            $image->delete();
          }
        }

        foreach($vp->images() as $image) { // find new background image
          $q = strpos($image->dir(), '_background');
          if ($q === false) {
            $image->rename('_background');
            $bgExists = true;
            $resize = true;
          }
          if ($resize) break;
        }
      }

      if ($resize) { // make responsive sizes
        $img = $vp->images()->first();
        $imgHeight = $img->height();
        $imgWidth = $img->width();

        $imgURL = $img->url();
        $imgRoot = $img->dir();
        $imgPage = $img->page();
        $imgExt = $img->extension();
        $imgName = str_replace($img->dir().'\\', '', $vp->images()->first());
        $imgTitle = str_replace('.'.$imgExt, '', $imgName);

        if($imgHeight > $imgWidth) { // If portrait

          echo 'huh?';

        } else { // If landscape or square

          if($imgWidth > 1024) { // If image is wide af

            copy($img, $imgRoot.'\\'.$imgTitle.'@3x.'.$imgExt);  // Make a @3x copy
            if($imgWidth > 2100) { // If image is stupid wide
              $img3x = imagecreatefrom.$imgExt($imgRoot.'\\'.$imgTitle.'@3x.'.$imgExt);
              $newHeight = (2100 * $imgHeight) / $imgWidth;
              imagescale($img3x, 2100, $newHeight); // Scale the @3x copy
            }

          } elseif ($imgWidth > 640) { // If image is only kinda wide

          }
        }
      }

      if ($bgexists && !$resize) { // delete not background images
        foreach($vp->images() as $image) {
          $n = strpos($image->dir(), '_background');
          if ($n === false) {
            $image->delete();
          }
        }
      }

      $img = $vp->images()->first();
      $imgSan = $img->page().'/'.str_replace($img->dir().'\\', '', $img);

    // Now let's set these suckers (if they exist)
    if(isset($img)): ?>
      <style media="screen">
        .value__background--<?php echo $vp->title()->html() ?> {
          background-image: url(<?php echo $imgSan ?>);
        }
        <?php if(isset($img2x)): ?>
          @media only screen and (min-width: 640px) {
            .value__background--<?php echo $vp->title()->html() ?> {
              background-image: url(<?php echo $imgSan ?>);
            }
          }
        <?php endif; ?>
        <?php if(isset($img3x)): ?>
          @media only screen and (min-width: 1024px) {
            .value__background--<?php echo $vp->title()->html() ?> {
              background-image: url(<?php echo $imgSan ?>);
            }
          }
        <?php endif; ?>
      </style>
    <?php endif; ?>

    <section class ="value__prop value__prop--<?php echo $vp->title()->html() ?>">
      <div class="value__img">
        <div class="value__background value__background--<?php echo $vp->title()->html() ?>"></div>
        <div class="value__overlay"></div>
      </div>
      <div class="value__text">
        <div class="value__headline">
          <h3><?php echo $vp->title()->html() ?></h3>
          <i class="value__icon icon ion-<?php echo $vp->icon()->html() ?>"></i>
        </div>
        <?php echo $vp->text()->kirbytext() ?>
      </div>
    </section>
  <?php endforeach; ?>
</article>
