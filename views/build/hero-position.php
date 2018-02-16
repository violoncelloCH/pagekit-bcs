<div class="uk-height-viewport <?= $params['blend'] ? $params['color']:'' ?> uk-background-image uk-background-cover <?= ($params['light'] ? 'uk-light':'')  ?>" style="background-image: url(<?= $params['hero_image'] ?>)">
  <?php foreach ($widgets as $widget): ?>
    <?= $widget->get('result') ?>
  <?php endforeach; ?>
</div>
