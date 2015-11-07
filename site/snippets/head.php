<meta charset="UTF-8"/>
<meta content="width=device-width, initial-scale=1" name="viewport"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta name="theme-color" content="#2d2926"/>

<meta name="description" content="<?php echo $site->description()->html() ?>"/>
<meta name="keywords" content="<?php echo $site->keywords()->html() ?>"/>

<?php if( $page->isHomePage() ): ?>
  <title><?php echo $site->title()->html() ?></title>
<?php elseif( $page->isErrorPage() ): ?>
  <title>Something's Gone Horribly Wrong</title>
<?php else: ?>
  <title><?php echo html($page->title() . ' • ' . $site->title()) ?></title>
<?php endif ?>

<link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?php echo url('assets/images/favicon-57.png') ?>"/>
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo url('assets/images/favicon-114.png') ?>"/>
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo url('assets/images/favicon-72.png') ?>"/>
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo url('assets/images/favicon-144.png') ?>"/>
<link rel="apple-touch-icon-precomposed" sizes="60x60" href="<?php echo url('assets/images/favicon-60.png') ?>"/>
<link rel="apple-touch-icon-precomposed" sizes="120x120" href="<?php echo url('assets/images/favicon-120.png') ?>"/>
<link rel="apple-touch-icon-precomposed" sizes="76x76" href="<?php echo url('assets/images/favicon-76.png') ?>"/>
<link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?php echo url('assets/images/favicon-152.png') ?>"/>

<link rel="icon" type="image/png" href="<?php echo url('assets/images/favicon-196.png') ?>" sizes="196x196"/>
<link rel="icon" type="image/png" href="<?php echo url('assets/images/favicon-96.png') ?>" sizes="96x96"/>
<link rel="icon" type="image/png" href="<?php echo url('assets/images/favicon-32.png') ?>" sizes="32x32"/>
<link rel="icon" type="image/png" href="<?php echo url('assets/images/favicon-16.png') ?>" sizes="16x16"/>
<link rel="icon" type="image/png" href="<?php echo url('assets/images/favicon-128.png') ?>" sizes="128x128"/>

<meta name="application-name" content="Phenotonic"/>
<meta name="msapplication-TileColor" content="#2ea72e"/>
<meta name="msapplication-TileImage" content="<?php echo url('assets/images/favicon-ms-144.png') ?>"/>
<meta name="msapplication-square70x70logo" content="<?php echo url('assets/images/favicon-ms-70.png') ?>"/>
<meta name="msapplication-square150x150logo" content="<?php echo url('assets/images/favicon-ms-150.png') ?>"/>
<meta name="msapplication-wide310x150logo" content="<?php echo url('assets/images/favicon-ms-310x150.png') ?>"/>
<meta name="msapplication-square310x310logo" content="<?php echo url('assets/images/favicon-ms-310.png') ?>"/>

<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/normalize/3.0.2/normalize.min.css"/>
<link rel="stylesheet" href="//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"/>
<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Merriweather:400,400italic,700,700italic"/>
<?php if( $page->isHomePage() ): ?>
  <?php echo css('assets/css/home.css') ?>
<?php elseif( $page->isErrorPage() ): ?>
  <?php echo css('assets/css/error.css') ?>
<?php else: ?>
  <?php echo css('assets/css/main.css') ?>
<?php endif ?>

<!-- Snipcart -->
<script
  src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"
  type="text/javascript"></script>
<script type="text/javascript"
  id="snipcart"
  src="https://cdn.snipcart.com/scripts/snipcart.js"
  data-api-key="YOUR_API_KEY"></script>
<link id="snipcart-theme" type="text/css"
  href="https://cdn.snipcart.com/themes/base/snipcart.min.css"
  rel="stylesheet">
