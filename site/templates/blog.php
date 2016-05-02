<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Gute Sache</title>

  <?php snippet("includes") ?>
</head>
<body>
  <?php snippet('header') ?>

  <section class="blog">
    <div class="text-width-fuse">
      <?php if ($page->hasHeadline()): ?>
        <h2 style="color: #ff00ff; text-align: center; text-transform: uppercase; font-size: 2.3em"><?= $page->headline() ?></h2>
      <?php else : ?>
        <h2><?= $page->title() ?></h2>
      <?php endif ?>
    </div>
    <p style="text-align: center;"><?= $page->text() ?></p>
    <?php foreach ($page->children()->visible()->flip() as $blogpost): ?>
      <?php if ($blogpost->hasImages()): ?>
        <?= thumb($blogpost->images()->first(), array(
          'width' => 1200,
          'height' => 300,
          'crop' => true
        )) ?>
      <?php endif ?>
      <div class="text-width-fuse">
        <a href="<?= $blogpost->url() ?>">
          <h4 style="margin-bottom: 1rem"><?= $blogpost->title() ?></h4>
        </a>
        <?php $featured_eg = $pages->find("register/".$blogpost->egname()) ?>
        <h5 style="margin-bottom: 2rem"><?= $featured_eg->title() ?></h5>
        <!-- <ul class="cleanList flatList flex flex-start">
          <?php if ($featured_eg->hasCity()): ?>
            <li><h5><span class="fa fa-map-marker"></span> <?= $featured_eg->city() ?></a></h5></li>
          <?php endif ?>
        </ul> -->
        <?php snippet("interactive", array('company' => $featured_eg)) ?>

        <p><?= $blogpost->text() ?></p>
      </div>
    <?php endforeach ?>
  </section>
  <?php snippet("footer") ?>
</body>
</html>
