<article class="uk-container">
  <?php if ($params['title'] == false): ?>
    <h1><?= $page->title ?></h1>
  <?php endif; ?>
  <?= $page->content ?>
</article>
