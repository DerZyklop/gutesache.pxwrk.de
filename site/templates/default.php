<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Gute Sache</title>

  <?php snippet("includes") ?>
</head>
<body>
  <?php snippet('header') ?>

  <section>
    <main class="text-width-fuse">
      <h2><?= $page->title() ?></h2>
      <div style="float:left; max-width: 30%;margin-right: 2em;margin-top: 0.5em">
        <?php if ($page->hasImages()): ?>
          <?= thumb($page->images()->first(), array(
            'width' => 1200,
            'crop' => true
          )) ?>
        <?php endif ?>
      </div>
      <p><?= $page->text() ?></p>
    </main>
  </section>
  <?php snippet("footer") ?>
</body>
</html>
