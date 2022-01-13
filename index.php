<?php

defined('_JEXEC') or die;

use Joomla\CMS\Factory;
use Joomla\CMS\HTML\HTMLHelper;
use Joomla\CMS\Language\Text;
use Joomla\CMS\Uri\Uri;

$app = Factory::getApplication();
$wa  = $this->getWebAssetManager();

$sitename = htmlspecialchars($app->get('sitename'), ENT_QUOTES, 'UTF-8');
$menu     = $app->getMenu()->getActive();

$templatePath = 'templates/' . $this->template;

?>
<!DOCTYPE html>
<html lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">

<head>

  <title><?php echo $sitename?></title>

  <jdoc:include type="metas" />
	<jdoc:include type="styles" />
	<jdoc:include type="scripts" />

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="<?php echo $this->baseurl.'/'.$templatePath ?>/vendor/bootstrap/css/bootstrap.min.css" type="text/css" />
  <script src="<?php echo $this->baseurl.'/'.$templatePath ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <link rel="stylesheet" href="<?php echo $this->baseurl.'/'.$templatePath ?>/css/main.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo $this->baseurl.'/'.$templatePath ?>/css/font.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo $this->baseurl.'/'.$templatePath ?>/css/color.css" type="text/css" />

</head>

<body>

  <pre><?php// var_export($app);?></pre>

  <section id="super-header">
    <div class="container">
      <div class="row">
        <div class="col-3">
          <p>&larr;</p>
          <jdoc:include type="modules" name="super-header-left" title="Super Header Left" />
        </div>
        <div class="col-6">
          <p>&#8597;</p>
          <jdoc:include type="modules" name="super-header-center" title="Super Header Center" />
        </div>
        <div class="col-3">
          <p>&rarr;</p>
          <jdoc:include type="modules" name="super-header-right" title="Super Header Right" />
        </div>
      </div>
    </div>
  </section>

  <header style="background-image: url(<?php echo $this->baseurl.'/'.$templatePath ?>/images/head-section-bg.png);">
    <div class="container">
      <div class="row" style="background-image: url(<?php echo $this->baseurl.'/'.$templatePath ?>/images/head-container-bg.png);">
        <div class="col-4">
          <img id="header-logo" src="<?php echo $this->baseurl.'/'.$templatePath ?>/images/logo4header.png" alt="ГПА г.Ялта" class="">
        </div>
        <div class="col-8">
          <h1 id="header-text" class=""><?php echo $app->get('sitename');?></h1>
        </div>
      </div>
    </div>
  </header>

  <section id="sub-header" class="">
    <div class="container">
      <div class="row">
        <div class="col-10">
          <p>&larr;</p>
          <jdoc:include type="modules" name="sub-header-left" title="Sub Header Left" />
        </div>
        <div class="col-2">
          <p>&rarr;</p>
          <jdoc:include type="modules" name="sub-header-right" title="Sub Header Right" />
        </div>
      </div>
    </div>
  </section>

  <section id="actual" class="">
    <div class="container">
      <div class="row">
        <div class="col-8">
          <jdoc:include type="modules" name="actual-left" title="Actual Left" />
          <iframe width="800" height="450" src="https://www.youtube.com/embed/idLgytCiRaw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="col-4">
          <p>&rarr;</p>
          <jdoc:include type="modules" name="actual-right" title="Actual Right" />
        </div>
      </div>
    </div>
  </section>

  <div class="container">
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
      <p class="col-md-4 mb-0 text-muted">&copy; 2021 Company, Inc</p>

      <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
      </a>

      <ul class="nav col-md-4 justify-content-end">
        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Features</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Pricing</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FAQs</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About</a></li>
      </ul>
    </footer>
  </div>
  <!-- <section id="footer" class="uk-section uk-padding-remove uk-background-secondary">
    <div class="uk-container">
      <jdoc:include type="modules" name="footer" title="Footer Block" />
    </div>
  </section>
  <section id="debug" class="uk-section uk-padding-remove uk-background-muted">
    <div class="uk-container">
      <jdoc:include type="modules" name="debug" title="" />
    </div>
  </section> -->
</body>

</html>
