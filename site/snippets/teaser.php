<div class="teaser no-link-highlighting">
  <a href="<?= $item->url() ?>">
    <div class="front">
      <h4 class="teaser-title"><?= $item->title() ?></h4>
      <?php $featured_eg = $pages->find("register/".$item->egname()) ?>
      <h5 class="teaser-eg-title"><?= $featured_eg->title() ?></h5>
      <h5 class="teaser-tag"><?= $item->tag() ?></h5>

    </div>
    <div class="back">
      <?php if ($item->hasImages()): ?>
        <?= thumb($item->images()->first(), array(
          'width' => 600,
          'height' => 600,
          'crop' => true
        )) ?>
      <?php else : ?>
        <?= thumb($pages->find("blog")->images()->find("placeholder.png"), array(
          'width' => 600,
          'height' => 600,
          'crop' => true
        )) ?>
      <?php endif ?>
    </div>
  </a>
</div>
