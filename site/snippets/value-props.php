<?php
  function saveBg($image, $ext, $imageName) {
    switch ($ext) {
      case 'jpeg':
      case 'jpg':
        imageinterlace($image, 1);
        imagejpeg($image, $imageName, 80);
        imagedestroy($image);
        break;
      case 'png':
        imagepng($image, $imageName, 2);
        imagedestroy($image);
        break;
      case 'gif':
        imagegif($image, $imageName);
        imagedestroy($image);
        break;
    }
  }
  function createBg($img) {

    $imgHeight = $img->height();
    $imgWidth  = $img->width();

    $imgURL    = $img->url();
    $imgRoot   = $img->dir();
    $imgPage   = $img->page();
    $imgExt    = $img->extension();
    $imgName   = str_replace($img->dir().'\\', '', $img);
    $imgTitle  = str_replace('.'.$imgExt, '', $imgName);

    $imgString = $imgRoot.'\\'.$imgName;

    if($imgHeight > $imgWidth) { // If portrait

      if($imgHeight > 2100) { // If image is really, *really* frickin' tall
        $bg3x = imagecreatefromstring(file_get_contents($imgString)); // Create @3x copy
          $newWidth = (2100 * $imgWidth) / $imgHieght;
          $bg3x = imagescale($bg3x, $newWidth, 2100); // Scale the @3x copy
          saveBg($bg3x, $imgExt, $imgRoot.'/_background@3x.'.$imgExt); // Save the @3x copy
        $bg3xExists = true; // Tell the world there is a @3x bg
      }

      if ($imgHeight > 1024) {
        $bg2x = imagecreatefromstring(file_get_contents($imgString)); // Create @2x copy
          $newWidth = (1024 * $imgWidth) / $imgHeight;
          $bg2x = imagescale($bg2x, $newWidth, 1024); // Scale the @2x copy
          saveBg($bg2x, $imgExt, $imgRoot.'/_background@2x.'.$imgExt); // Save the @2x copy
        $bg2xExists = true; // Tell the world there is a @2x bg
      }

      if ($imgHeight > 640) {
        $bg = imagecreatefromstring(file_get_contents($imgString)); // Create copy
          $newWidth = (640 * $imgWidth) / $imgHeight;
          $bg = imagescale($bg, $newWidth, 640); // Scale the bg
          saveBg($bg, $imgExt, $imgRoot.'/_background.'.$imgExt); // Save the bg
        $bgExists = true; // Tell the world there is a bg
      }

      if ($imgHeight < 640) {
        $img->rename('_background'.$imgExt);
        $bgExists = true; // Tell the world there is a bg
      }

    } else { // If landscape or square

      if($imgWidth > 2100) { // If image is wide af
        $bg3x = imagecreatefromstring(file_get_contents($imgString)); // Create @3x copy
          $newHeight = (2100 * $imgHeight) / $imgWidth;
          $bg3x = imagescale($bg3x, 2100, $newHeight); // Scale the @3x copy
          saveBg($bg3x, $imgExt, $imgRoot.'/_background@3x.'.$imgExt); // Save the @3x copy
        $bg3xExists = true; // Tell the world there is a @3x bg
      }

      if ($imgWidth > 1024) {
        $bg2x = imagecreatefromstring(file_get_contents($imgString)); // Create @2x copy
          $newHeight = (1024 * $imgHeight) / $imgWidth;
          $bg2x = imagescale($bg2x, 1024, $newHeight); // Scale the @2x copy
          saveBg($bg2x, $imgExt, $imgRoot.'/_background@2x.'.$imgExt); // Save the @2x copy
        $bg2xExists = true; // Tell the world there is a @2x bg
      }

      if ($imgWidth > 640) {
        $bg = imagecreatefromstring(file_get_contents($imgString)); // Create copy
          $newHeight = (640 * $imgHeight) / $imgWidth;
          $bg = imagescale($bg, 640, $newHeight); // Scale the bg
          saveBg($bg, $imgExt, $imgRoot.'/_background.'.$imgExt); // Save the bg
        $bgExists = true; // Tell the world there is a bg
      }

      if ($imgWidth < 640) {
        $img->rename('_background'.$imgExt);
        $bgExists = true; // Tell the world there is a bg
      }
    }
  }
?>
<article class="value">
  <?php if($data->headline()->isNotEmpty()): ?>
    <h2><?php echo $data->headline()->html() ?></h2>
  <?php endif; ?>
  <?php echo $data->text()->kirbytext() ?>
  <?php foreach($data->children()->visible() as $vp):

    // Let's make some new images, maybe? Only if we need to tho. And there are images that exist
    if ($vp->hasImages() && $vp->images()->count() == 1) {
      if (strpos($vp->images()->first()->url(), '_background') === false) {
        createBg($vp->images()->first());
        break;
      }
    } elseif ($vp->hasImages() && $vp->images()->count() > 1) {

      $newBg    = false;
      $bgExists = false;
      $i = 0;

      foreach ($vp->images() as $image) { // check for new background
        $q = strpos($image->dir(), '_background');
        if ($q === false) $newBg = true;
        if ($newBg) break;
      }

      foreach ($vp->images() as $image) { // check my work
        if (strpos($image->url(), '_background') !== false) $bgExists = true;
      }

      if ($newBg && $bgExists == false) { // make responsive sizes if there's a new background
        createBg($vp->images()->first());
      }

      foreach ($vp->images() as $image) {
        if (strpos($image->url(), '_background'.'%40'.'3x') !== false) $bg3xExists = true;
        if (strpos($image->url(), '_background'.'%40'.'2x') !== false) $bg2xExists = true;
        if (strpos($image->url(), '_background.')           !== false) $bgExists   = true;

        if(strpos($image->url(), '_background') === false) $image->rename('deleted-background-'.$i); // housekeeping
        $i++;

        if (strpos($image->url(), 'deleted-background-')) $image->delete();
      }
    }

    // Now let's set these suckers (if they exist)
    if($vp->hasImages() && $bgExists):
      $bg      = $vp->images()->first();
      $bgExt   = $bg->extension();
      $bgName  = str_replace($bg->dir().'\\', '', $bg);
      $bgTitle = str_replace('.'.$bgExt, '', $bgName);
      $bgSan   = $bg->page().'/'.$bgName;
      ?>

      <style media="screen">
        .prop__background--<?php echo $vp->title()->html() ?> {
          background-image: url(<?php echo $bgSan ?>);
        }

        <?php if($bg2xExists):
          $bg2xSan = $bg->page().'/'.$bgTitle.'@2x.'.$bgExt;
          ?>
          @media only screen and (min-width: 640px) {
            .prop__background--<?php echo $vp->title()->html() ?> {
              background-image: url(<?php echo $bg2xSan ?>);
            }
          }
        <?php endif; ?>

        <?php if($bg3xExists):
          $bg3xSan = $bg->page().'/'.$bgTitle.'@3x.'.$bgExt;
          ?>
          @media only screen and (min-width: 1024px) {
            .prop__background--<?php echo $vp->title()->html() ?> {
              background-image: url(<?php echo $bg3xSan ?>);
            }
          }
        <?php endif; ?>

      </style>

    <?php endif; ?>

    <section class="prop prop--<?php echo $vp->title()->html() ?>">
      <div class="prop__img">
        <div class="prop__background prop__background--<?php echo $vp->title()->html() ?>"></div>
        <div class="prop__overlay"></div>
      </div>
      <div class="prop__text">
        <h3><?php echo $vp->title()->html() ?><i class="prop__icon icon ion-<?php echo $vp->icon()->html() ?>"></i></h3>
        <?php echo $vp->text()->kirbytext() ?>
      </div>
    </section>
  <?php endforeach; ?>
</article>
