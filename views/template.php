<!DOCTYPE html>
<html class="<?= $params['html_class'] ?>" lang="<?= $intl->getLocaleTag() ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= $view->render('head') ?>
        <?php $view->style('main-style', 'theme:assets/css/theme.min.css') ?>
        <?php $view->style('animated', 'theme:assets/css/animate.min.css') ?>
        <?php $view->script('main-javascript', 'theme:assets/js/uikit.min.js') ?>
    </head>
    <body>

    <nav class="uk-navbar-container">
      <div class="uk-container uk-container-large">
        <div uk-navbar>
            <div class="uk-navbar-left">
              <a class="uk-navbar-brand uk-margin-small-left" href="<?= $view->url()->get() ?>">
                <?php if ($params['logo']) : ?>
                    <img class="" src="<?= $this->escape($params['logo']) ?>" alt="">
                <?php else : ?>
                    <?= $params['title'] ?>
                <?php endif ?>
              </a>
            </div>
            <div class="uk-navbar-right uk-visible@m">
              <?php if ($view->menu()->exists('main')): ?>
                <?= $view->menu('main' , 'build/main-menu.php') ?>
              <?php endif; ?>

              <?php if ($view->position()->exists('navbar')): ?>
                <?= $view->position('navbar' , 'build/navbar-position.php') ?>
              <?php endif; ?>
            </div>
            <div class="uk-navbar-right uk-hidden@m">
              <a class="uk-navbar-toggle" href="#offCanvasMenu" uk-toggle>
                 <span uk-navbar-toggle-icon></span> <span class="uk-margin-small-left">Menu</span>
             </a>
              <?php if ($view->menu()->exists('main')): ?>
                <?= $view->menu('main' , 'build/offcanvas-menu.php') ?>
              <?php endif; ?>
            </div>
        </div>
      </div>
    </nav>

    <?php if ($view->position()->exists('hero')) : ?>
      <?= $view->position('hero' , 'build/hero-position.php') ?>
    <?php else: ?>
      <div class="uk-margin-small-top"></div>
    <?php endif; ?>

    <?php if ($params['content']  == false): ?>
      <header class="uk-container uk-margin">
        <section class="uk-grid-small <?= $view->position()->exists('sidebar') ? 'uk-grid-divider' : '' ?>" uk-grid>
          <div class="uk-width-<?= $view->position()->exists('sidebar') ? '3-4' : '4-4' ?>@m">
            <?= $view->render('content') ?>
          </div>
          <?php if ($view->position()->exists('sidebar')): ?>
            <div class="uk-width-1-4@m">
              <?= $view->position('sidebar' , 'build/sidebar-position.php') ?>
            </div>
          <?php endif; ?>
        </section>
      </header>
    <?php endif; ?>

    <?php if ($view->position()->exists('bottom')): ?>
      <section class="uk-section uk-section-primary">
        <?= $view->position('bottom' , 'bottom-position.php') ?>
      </section>
    <?php endif; ?>

    <?php if ($params['footer'] == false): ?>
      <footer class="uk-padding-small">
        <?= $params['cpy'] ?>
      </footer>
    <?php endif; ?>

    <?= $view->render('footer') ?>
    </body>
</html>
