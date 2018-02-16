<?php foreach ($widgets as $widget): ?>
  <div class="uk-margin-bottom uk-card <?= $widget->theme['panel'] ?>">
    <?php if ($widget->theme['title'] == false): ?>
      <div class="uk-card-header">
        <h4><?= $widget->title ?></h4>
      </div>
      <?php endif; ?>

      <?php if ($widget->theme['padding'] != true): ?>
        <div class="uk-card-body">
      <?php endif; ?>

        <?= $widget->get('result') ?>

      <?php if ($widget->theme['padding'] != true): ?>
        </div>
      <?php endif; ?>
  </div>
<?php endforeach; ?>
