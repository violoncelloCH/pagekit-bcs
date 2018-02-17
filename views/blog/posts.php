<?php $view->script('posts', 'blog:app/bundle/posts.js', 'vue') ?>

  <?php foreach ($posts as $post) : ?>
    <div class="uk-card uk-card-muted">
      <div>
        <?php if ($image = $post->get('image.src')): ?>
          <div class="uk-card-media-top">
            <a class="pas-blog-image" href="<?= $view->url('@blog/id', ['id' => $post->id]) ?>"><img src="<?= $image ?>" alt="<?= $post->get('image.alt') ?>"></a>
          </div>
        <?php endif ?>
        <h1 class="uk-link-reset uk-margin-remove"><a href="<?= $view->url('@blog/id', ['id' => $post->id]) ?>"><?= $post->title ?></a></h1>
        <div class="uk-margin-small"><?= $post->excerpt ?: $post->content ?></div>
        <div class="uk-margin-small">
            <ul class="uk-subnav uk-margin-bottom-remove">

                <?php if (isset($post->readmore) && $post->readmore || $post->excerpt) : ?>
                <li><a href="<?= $view->url('@blog/id', ['id' => $post->id]) ?>"><?= __('Read more') ?></a></li>
                <?php endif ?>

                <?php if ($post->isCommentable() || $post->comment_count) : ?>
                <li><a href="<?= $view->url('@blog/id#comments', ['id' => $post->id]) ?>"><?= _c('{0} No comments|{1} %num% Comment|]1,Inf[ %num% Comments', $post->comment_count, ['%num%' => $post->comment_count]) ?></a></li>
                <?php endif ?>

            </ul>
        </div>
      </div>
    </div>
  <?php endforeach; ?>
    <?php

        $range     = 3;
        $total     = intval($total);
        $page      = intval($page);
        $pageIndex = $page - 1;

    ?>

    <?php if ($total > 1) : ?>
    <ul class="uk-pagination">


        <?php for($i=1;$i<=$total;$i++): ?>
            <?php if ($i <= ($pageIndex+$range) && $i >= ($pageIndex-$range)): ?>

                <?php if ($i == $page): ?>
                <li class="uk-active"><span><?=$i?></span></li>
                <?php else: ?>
                <li>
                    <a href="<?= $view->url('@blog/page', ['page' => $i]) ?>"><?=$i?></a>
                <li>
                <?php endif; ?>

            <?php elseif($i==1): ?>

                <li>
                    <a href="<?= $view->url('@blog/page', ['page' => 1]) ?>">1</a>
                </li>
                <li><span>...</span></li>

            <?php elseif($i==$total): ?>

                <li><span>...</span></li>
                <li>
                    <a href="<?= $view->url('@blog/page', ['page' => $total]) ?>"><?=$total?></a>
                </li>

            <?php endif; ?>
        <?php endfor; ?>


    </ul>
    <?php endif ?>

</div>
