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

  <link rel="stylesheet" href="<?php echo $this->baseurl.'/'.$templatePath ?>/css/main.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo $this->baseurl.'/'.$templatePath ?>/css/font.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo $this->baseurl.'/'.$templatePath ?>/css/color.css" type="text/css" />

  <script src="<?php echo $this->baseurl.'/'.$templatePath ?>/vendor/bootstrap/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="<?php echo $this->baseurl.'/'.$templatePath ?>/vendor/bootstrap/css/bootstrap.min.css" type="text/css" />

</head>

<body>
  <header>
    <div class="uk-section uk-section-small uk-padding-remove uk-background-cover" style="background-image: url(<?php echo $this->baseurl.'/'.$templatePath ?>/images/head-section-bg.png);">
      <div class="uk-container uk-align-center uk-background-cover" style="background-image: url(<?php echo $this->baseurl.'/'.$templatePath ?>/images/head-container-bg.png);">
        <div class="" uk-grid>
          <div class="uk-width-5-6">
            <div class="uk-grid-small" uk-grid>
              <div class="uk-width-1-6">
                <img id="header-logo" src="<?php echo $this->baseurl.'/'.$templatePath ?>/images/logo4header.png" alt="ГПА г.Ялта" class="uk-align-right">
              </div>
              <div class="uk-width-5-6">
                <h1 id="header-text" class="uk-text-left uk-text-uppercase uk-text-middle">
                  Гуманитарно-педагогическая академия (филиал)<br>ФГАОУ ВО &#171;Крымский федеральный университет имени В.И.Вернадского&#187;<br>в г.Ялте
                </h1>
              </div>
            </div>
          </div>
          <div class="uk-width-1-6">
            <p>&#178;</p>
            <jdoc:include type="module" name="header" title="Header" />
          </div>
        </div>
      </div>
    </div>
  </header>

  <section id="sub-header" class="uk-section uk-padding-remove uk-background-muted">
    <div class="uk-container">
      <jdoc:include type="modules" name="sub-header" title="Sub Header" />
    </div>
  </section>

  <section id="attention" class="uk-section uk-padding-remove">
    <div class="uk-container">
      <div class="" uk-grid>
        <div class="uk-width-2-3">
          <iframe width="800" height="450" src="https://www.youtube.com/embed/idLgytCiRaw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="uk-width-1-3">
          <jdoc:include type="modules" name="actual" title="Actual Block" />
        </div>
      </div>
    </div>
  </section>

  <section id="timeline" class="uk-section uk-padding-remove">
    <div class="">
      <h2 style="text-align:center;">Академия в 2021 году</h2>
    </div>
    <div class="uk-flex uk-flex-center" uk-grid>
      <div class="uk-width-expand uk-background-secondary">
        <h3 style="text-align:center;">Недавно</h3>
      </div>
      <div class="uk-width-1-6 uk-background-primary uk-padding-remove">
        <h3 class="" style="color:white;text-align:center;">Сегодня</h3>
      </div>
      <div class="uk-width-1-3 uk-background-muted">
        <h3 style="text-align:center;">Скоро</h3>
      </div>
    </div>
    <div class="uk-flex uk-flex-center uk-padding-remove" uk-grid>
      <div class="uk-width-expand uk-background-secondary">
        <div class="uk-flex uk-flex-right" uk-grid>
          <div class="uk-card uk-card-default uk-card-small uk-width-medium">
            <div class="uk-card-header"><h3 class="uk-card-title">Title</h3></div>
            <div class="uk-card-body"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p></div>
            <div class="uk-card-footer"><p class="uk-text-meta">Written by <a href="#">Super User</a> on <time datetime="2016-04-01T19:00">April 01, 2016</time>.</p></div>
          </div>
          <div class="uk-card uk-card-default uk-card-small uk-width-medium">
            <div class="uk-card-header"><h3 class="uk-card-title">Title</h3></div>
            <div class="uk-card-body"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p></div>
            <div class="uk-card-footer"><p class="uk-text-meta">Written by <a href="#">Super User</a> on <time datetime="2016-04-01T19:00">April 01, 2016</time>.</p></div>
          </div>
          <div class="uk-card uk-card-default uk-card-small uk-width-medium">
            <div class="uk-card-header"><h3 class="uk-card-title">Title</h3></div>
            <div class="uk-card-body"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p></div>
            <div class="uk-card-footer"><p class="uk-text-meta">Written by <a href="#">Super User</a> on <time datetime="2016-04-01T19:00">April 01, 2016</time>.</p></div>
          </div>
        </div>
      </div>
      <div class="uk-width-1-6 uk-background-primary uk-padding-remove">
        <div class="uk-flex uk-flex-center">
          <div class="uk-card uk-card-default uk-card-small uk-width-medium">
            <div class="uk-card-header"><h3 class="uk-card-title">Title</h3></div>
            <div class="uk-card-body"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p></div>
            <div class="uk-card-footer"><p class="uk-text-meta">Written by <a href="#">Super User</a> on <time datetime="2016-04-01T19:00">April 01, 2016</time>.</p></div>
          </div>
        </div>
      </div>
      <div class="uk-width-1-3 uk-background-muted">
        <div class="uk-flex uk-flex-left" uk-grid>
          <div class="uk-card uk-card-default uk-card-small uk-width-medium">
            <div class="uk-card-header"><h3 class="uk-card-title">Title</h3></div>
            <div class="uk-card-body"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p></div>
            <div class="uk-card-footer"><p class="uk-text-meta">Written by <a href="#">Super User</a> on <time datetime="2016-04-01T19:00">April 01, 2016</time>.</p></div>
          </div>
          <div class="uk-card uk-card-default uk-card-small uk-width-medium">
            <div class="uk-card-header"><h3 class="uk-card-title">Title</h3></div>
            <div class="uk-card-body"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p></div>
            <div class="uk-card-footer"><p class="uk-text-meta">Written by <a href="#">Super User</a> on <time datetime="2016-04-01T19:00">April 01, 2016</time>.</p></div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>
  <section id="footer" class="uk-section uk-padding-remove uk-background-secondary">
    <div class="uk-container">
      <jdoc:include type="modules" name="footer" title="Footer Block" />
    </div>
  </section>
  <section id="debug" class="uk-section uk-padding-remove uk-background-muted">
    <div class="uk-container">
      <jdoc:include type="modules" name="debug" title="" />
    </div>
  </section>
</body>

</html>
